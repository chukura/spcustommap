<?php
/**
 * SP Custom Map plugin for Craft CMS
 *
 * SpCustomMap Service
 *
 * --snip--
 * All of your plugin’s business logic should go in services, including saving data, retrieving data, etc. They
 * provide APIs that your controllers, template variables, and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 * --snip--
 *
 * @author    Thabang Chukura
 * @copyright Copyright (c) 2018 Thabang Chukura
 * @link      http://www.chukura.site
 * @package   SpCustomMap
 * @since     0.0.1
 */

namespace Craft;

class SpCustomMapService extends BaseApplicationComponent
{
    /**
     * This function can literally be anything you want, and you can have as many service functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     craft()->spCustomMap->exampleService()
     */
    public function basicMapping(BaseElementModel $element)
    {

    $mapping = [];

    $mapping['objectID'] = $element->id;
    $mapping['elementId'] = intval($element->id);
    $mapping['status'] = $element->getStatus();
    $mapping['title'] = $element->getStatus();
    
    }

    public function newMapping($entry)
{
    $ret = [];

    $ret['objectID'] = $entry->id;
    $ret['title'] = $entry->title;
    $ret['activityId'] = $entry->id;
    $ret['id'] = $entry->id;
    $ret['slug'] = $entry->slug;
    $ret['url'] = $entry->url;
    $ret['uri'] = '/' . $entry->uri;
    $ret['enabled'] = $entry->enabled;
    $ret['postDate'] = $entry->postDate;
    $ret['dateCreated'] = $entry->dateCreated;
    $ret['dateUpdated'] = $entry->dateUpdated;
    $ret['defaultVariantId'] = $entry->defaultVariantId;
    $ret['defaultSku'] = $entry->defaultSku;
    //$ret['defaultVariant'] = $entry->defaultVariant;
    $ret['defaultHeight'] = $entry->defaultHeight;
    $ret['defaultLength'] = $entry->defaultLength;
    $ret['defaultWidth'] = $entry->defaultWidth;
    $ret['getImage'][0]['title'] = $entry->getImage[0]['title'];
    $ret['getImage'][0]['url'] = $entry->getImage[0]['url'];
    $ret['getImage'][0]['slug'] = $entry->getImage[0]['slug'];
    $ret['description'] = $entry->description->getParsedContent();
    $ret['size'] = $entry->size;
    $ret['age'] = $entry->age;
    $ret['capacity'] = $entry->capacity;
    $ret['productType'][0]['title'] = $entry->productType[0]['title'];
    $ret['productStatus'] = $entry->productStatus;
    $ret['features'] = $entry->features;
    $ret['certifications'][0]['title'] = $entry->certifications[0]['title'];
    $ret['defaultPrice'] = $entry->defaultPrice;
    // .. More custom data ..

    return $ret;
}

}