<?php 

class GuideBook extends DataObject {

  private static $db = array (
    'Title' => 'Varchar',
  );

  private static $has_one = array (
    'Background' => 'Image',
    'HomePage' => 'HomePage'
  );

  private static $summary_fields = array (
    'Title' => 'Title of guide book'
  );

  public function getCMSFields() {
    $fields = FieldList::create(
      TextField::create('Title'),
      $uploader = UploadField::create('Background')
    );

    $uploader->setFolderName('homepage-photos');
    $uploader->getValidator()->setAllowedExtensions(array(
      'png', 'gif', 'jpeg', 'jpg'
    ));

    return $fields;
  }
}