<?php

namespace Drupal\phpstan_fixtures\Plugin\Condition;

use Drupal\Core\Condition\ConditionPluginBase;

/**
 * @Condition(
 *   id = "condition_with_context",
 *   label = @Translation("Condition with context"),
 *   context = {
 *     "user" = @ContextDefinition("entity:user", label = @Translation("User"))
 *   },
 * );
 */

final class ConditionWithContext extends ConditionPluginBase {

    public function evaluate()
    {
        return true;
    }

    public function summary()
    {
        return 'sample file';
    }
}
