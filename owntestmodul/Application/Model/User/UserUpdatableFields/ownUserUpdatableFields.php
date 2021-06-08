namespace own\owntestmodul\Application\Model\User\UserUpdatableFields;

class UserUpdatableFields extends UserUpdatableFields_parent
  {

  public function getUpdatableFields()
    {
    $updatableFields = parent::getUpdatableFields();
    return array_merge($updatableFields, ['EXTENDUSER_ADDITIONALCONTACTINFO']);
    }

  }
