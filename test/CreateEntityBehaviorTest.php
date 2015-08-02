<?php

/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2015-08-02
 */
class CreateEntityBehaviorTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!class_exists('Post')) {
            $schema = <<<EOF
<database name="create_entity_behavior" defaultIdMethod="native">
    <table name="Post">
        <column name="id" required="true" primaryKey="true" autoIncrement="true" type="INTEGER" />

        <behavior name="create_entity" />
    </table>
</database>
EOF;

            $builder        = new PropelQuickBuilder();
            $configuration  = $builder->getConfig();
            $configuration->setBuildProperty('behavior.create_entity.class', '../source/CreateEntityBehavior');
            $builder->setConfig($configuration);
            $builder->setSchema($schema);

            $builder->build();
        }
    }

    public function testMethodExist()
    {
        $this->assertTrue(method_exists('PostQuery', 'createEntity'));
    }

    public function testCreateEntity()
    {
        $entity = new Post();
        $query  = PostQuery::create();

        $this->assertEquals($entity, $query->createEntity());
    }
}