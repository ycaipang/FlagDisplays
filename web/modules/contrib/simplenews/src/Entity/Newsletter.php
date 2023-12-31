<?php

namespace Drupal\simplenews\Entity;

use Drupal\block\Entity\Block;
use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\simplenews\NewsletterInterface;

/**
 * Defines the simplenews newsletter entity.
 *
 * @ConfigEntityType(
 *   id = "simplenews_newsletter",
 *   label = @Translation("Simplenews newsletter"),
 *   handlers = {
 *     "list_builder" = "Drupal\simplenews\NewsletterListBuilder",
 *     "form" = {
 *       "add" = "Drupal\simplenews\Form\NewsletterForm",
 *       "edit" = "Drupal\simplenews\Form\NewsletterForm",
 *       "delete" = "Drupal\simplenews\Form\NewsletterDeleteForm"
 *     }
 *   },
 *   config_prefix = "newsletter",
 *   admin_permission = "administer newsletters",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name"
 *   },
 *   config_export = {
 *     "name",
 *     "id",
 *     "description",
 *     "format",
 *     "priority",
 *     "receipt",
 *     "from_name",
 *     "subject",
 *     "from_address",
 *     "hyperlinks",
 *     "allowed_handlers",
 *     "new_account",
 *     "access",
 *     "reason",
 *     "weight",
 *   },
 *   links = {
 *     "delete-form" = "/admin/config/services/simplenews/manage/{simplenews_newsletter}/delete",
 *     "edit-form" = "/admin/config/services/simplenews/manage/{simplenews_newsletter}"
 *   }
 * )
 */
class Newsletter extends ConfigEntityBase implements NewsletterInterface {

  /**
   * The primary key.
   *
   * @var string
   */
  public $id;

  /**
   * Name of the newsletter.
   *
   * @var string
   */
  public $name = '';

  /**
   * Description of the newsletter.
   *
   * @var string
   */
  public $description = '';

  /**
   * HTML or plaintext newsletter indicator.
   *
   * @var string
   */
  public $format;

  /**
   * Priority indicator.
   *
   * @var int
   */
  public $priority;

  /**
   * TRUE if a read receipt should be requested.
   *
   * @var bool
   */
  public $receipt;

  /**
   * Name of the email author.
   *
   * @var string
   */
  public $from_name;

  /**
   * Subject of newsletter email. May contain tokens.
   *
   * @var string
   */
  public $subject = '[[simplenews-newsletter:name]] [node:title]';

  /**
   * Email author address.
   *
   * @var string
   */
  public $from_address;

  /**
   * Indicates if hyperlinks should be kept inline or extracted.
   *
   * @var bool
   */
  public $hyperlinks = TRUE;

  /**
   * Allowed recipient handlers.
   *
   * If none are selected, then all of them will be available.
   *
   * @var array
   */
  public $allowed_handlers = [];

  /**
   * Indicates how to integrate with the register form.
   *
   * @var string
   */
  public $new_account = 'none';

  /**
   * Controls access to subscribe and unsubscribe.
   *
   * @var string
   */
  public $access = SIMPLENEWS_ACCESS_DEFAULT;

  /**
   * Reason for receiving the newsletter.
   *
   * @var string
   */
  public $reason = '';

  /**
   * Weight of this newsletter (used for sorting).
   *
   * @var int
   */
  public $weight = 0;

  /**
   * {@inheritdoc}
   */
  public static function preCreate(EntityStorageInterface $storage, array &$values) {
    $config = \Drupal::config('simplenews.settings');
    $values += [
      'format' => $config->get('newsletter.format'),
      'priority' => $config->get('newsletter.priority'),
      'receipt' => $config->get('newsletter.receipt'),
      'from_name' => $config->get('newsletter.from_name'),
      'from_address' => $config->get('newsletter.from_address'),
    ];
    parent::preCreate($storage, $values);
  }

  /**
   * {@inheritdoc}
   */
  public static function postDelete(EntityStorageInterface $storage, array $entities) {
    parent::postDelete($storage, $entities);

    /** @var \Drupal\simplenews\Subscription\SubscriptionStorageInterface $subscription_storage */
    $subscription_storage = \Drupal::entityTypeManager()
      ->getStorage('simplenews_subscriber');

    foreach ($entities as $newsletter) {
      $subscription_storage->deleteSubscriptions(['subscriptions_target_id' => $newsletter->id()]);
      \Drupal::messenger()->addMessage(t('All subscriptions to newsletter %newsletter have been deleted.', ['%newsletter' => $newsletter->label()]));
    }

    if (\Drupal::moduleHandler()->moduleExists('block')) {
      // Make sure there are no active blocks for these newsletters.
      $ids = \Drupal::entityQuery('block')
        ->condition('plugin', 'simplenews_subscription_block')
        ->condition('settings.newsletters.*', array_keys($entities), 'IN')
        ->execute();
      if ($ids) {
        $blocks = Block::loadMultiple($ids);
        foreach ($blocks as $block) {
          $settings = $block->get('settings');
          foreach ($entities as $newsletter) {
            if (in_array($newsletter->id(), $settings['newsletters'])) {
              unset($settings['newsletters'][array_search($newsletter->id(), $settings['newsletters'])]);
            }
          }
          // If there are no enabled newsletters left, delete the block.
          if (empty($settings['newsletters'])) {
            $block->delete();
          }
          else {
            // otherwise, update the settings and save.
            $block->set('settings', $settings);
            $block->save();
          }
        }
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function isAccessible() {
    return $this->access == SIMPLENEWS_ACCESS_DEFAULT;
  }

}
