<?php
/**
 * Created by PhpStorm.
 * User: adammoss
 * Date: 14/07/15
 * Time: 14:59
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = new Mage_Eav_Model_Entity_Setup('core_setup');

$installer->startSetup();
$entityTypeId = 'catalog_category';

/* SEO Heading Category Attribute Setup */

// Yes/No

/*$installer->addAttribute($entityTypeId, 'enable_grid', array(
    'group'         => 'General Information',
    'input'         => 'select',
    'type'          => 'int',
    'label'         => 'My Yes/No Attribute',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'source' => 'eav/entity_attribute_source_boolean',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
));*/

// Textarea

/*$installer->addAttribute($entityTypeId, 'attributecode', array(
    'group'         => 'General Information',
    'input'         => 'textarea',
    'type'          => 'varchar',
    'label'         => 'My Textarea Attribute',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
)); */

// Text

/*$installer->addAttribute($entityTypeId, 'attributecode', array(
    'group'         => 'General Information',
    'input'         => 'text',
    'type'          => 'varchar',
    'label'         => 'My Text Attribute',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
)); */

/*$installer->addAttribute($entityTypeId, 'attributecode', array(
    'group'         => 'General Information',
    'input'         => 'image',
    'type'          => 'varchar',
    'label'         => 'My Image Attribute',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
)); */

// Image

/*$installer->addAttribute($entityTypeId, 'attributecode', array(
    'group'         => 'General Information',
    'input'         => 'image',
    'type'          => 'varchar',
    'backend' => 'catalog/category_attribute_backend_image',
    'label'         => 'My Image Attribute',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
)); */

// Multiselect

/*$installer->addAttribute($entityTypeId, 'attributecode', array(
    'group'         => 'General Information',
    'input'         => 'multiselect',
    'type'          => 'text',
    'label'         => 'RMy Multiselect Attribute',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'source' => 'creare_categorygrid/source_categories',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
)); */

$installer->endSetup();