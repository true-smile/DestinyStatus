<?php

namespace Destiny\Definitions\Manifest;

use Destiny\Definitions\Common\DisplayProperties;
use Destiny\Definitions\Definition;

/**
 * Class Destination
 * @package Destiny\Definitions\Manifest
 * @property DisplayProperties $displayProperties
 * @property string $placeHash (Manifest/Place)
 * @property string $defaultFreeroamActivityHash (Manifest/Activity)
 * @property array $activityGraphEntries (@todo - https://bungie-net.github.io/multi/schema_Destiny-Definitions-DestinyActivityGraphListEntryDefinition.html#schema_Destiny-Definitions-DestinyActivityGraphListEntryDefinition)
 * @property array $bubbleSettings (@todo - https://bungie-net.github.io/multi/schema_Destiny-Definitions-DestinyDestinationBubbleSettingDefinition.html#schema_Destiny-Definitions-DestinyDestinationBubbleSettingDefinition)
 * @property array $bubbles
 * @property string $hash
 * @property int $index
 * @property bool $redacted
 */
class Destination extends Definition
{
    protected $appends = [
    ];
}