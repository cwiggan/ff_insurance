<?php

use Kalnoy\Cruddy\Schema\BaseSchema;
use Kalnoy\Cruddy\Service\Validation\FluentValidator;

class UserSchema extends BaseSchema {

    protected $model = 'User';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = 'name';

    /**
     * The name of the column that will sort data by default.
     *
     * @var string
     */
    protected $defaultOrder = null;

    /**
     * Define some fields.
     *
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $schema
     */
    public function fields($schema)
    {
        $schema->increments('id');
        $schema->string('email')->required()->unique();
        $schema->string('username')->required()->unique();
        $schema->password('password')->required();
        $schema->password('password_confirmation')->required();
        $schema->relates('roles', 'roles');
        $schema->boolean('confirmed');
        $schema->timestamps();
    }

    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
        $schema->col('id');
        $schema->col('username');
        $schema->col('email');
        $schema->col('updated_at')->reversed();
    }

    /**
     * Define some files to upload.
     *
     * @param \Kalnoy\Cruddy\Repo\Stub $repo
     */
    public function files($repo)
    {

    }

    /**
     * Define validation rules.
     *
     * @param \Kalnoy\Cruddy\Service\Validation\FluentValidator $v
     */
    public function rules($v)
    {
        $v->always(
        [
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);
    }
}