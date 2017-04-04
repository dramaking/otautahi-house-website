<?php 

class Feature extends DataObject {

  private static $db = array (
    'FeatureHeading' => 'Varchar',
    'FeatureDescription' => 'Text',
  );

  private static $has_one = array (
    'FeaturePhoto' => 'Image',
    'HomePage' => 'HomePage',
    'FeaturesPage' => 'FeaturesPage',
  );

  private static $summary_fields = array (
    // 'FeaturePhoto.CMSThumbnail' => '',
    'FeatureHeading' => 'Title of feature',
    'FeatureDescription' => 'Short description',
  );

  // public function getGridThumbnail() {
  //   if($this->Photo()->exists()) {
  //     return $this->Photo()->setWidth(100);
  //   }

  //   return '(no image)';
  // }

  public function getCMSFields() {
    $fields = FieldList::create(
      TextField::create('FeatureHeading'),
      TextareaField::create('FeatureDescription'),
      $uploader = UploadField::create('FeaturePhoto')
    );

    $uploader->setFolderName('homepage-photos');
    $uploader->getValidator()->setAllowedExtensions(array(
      'png', 'gif', 'jpeg', 'jpg'
    ));

    return $fields;
  }
}