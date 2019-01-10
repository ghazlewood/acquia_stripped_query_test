<?php

namespace Drupal\acquia_stripped_query_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Test' Block for the Acquia Stripped Query Header.
 *
 * @Block(
 *   id = "acquia_stripped_query_block",
 *   admin_label = @Translation("Acquia Stripped Query Header Test Block"),
 *   category = @Translation("Acquia"),
 * )
 */
class AcquiaStrippedQueryHeaderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t($_ENV['HTTP_X_ACQUIA_STRIPPED_QUERY']),
    );
  }

}

