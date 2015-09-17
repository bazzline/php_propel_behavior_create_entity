<?php

/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2015-08-02
 */
class CreateEntityBehavior extends Behavior
{
    /**
     * @param DataModelBuilder $builder
     * @return string
     */
    public function queryMethods($builder)
    {
        $code = '';
        $code = $this->addCreateEntityToCode($code, $builder);

        return $code;
    }

    /**
     * @param string $code
     * @param DataModelBuilder $builder
     * @return string
     */
    public function addCreateEntityToCode($code, DataModelBuilder $builder)
    {
        $className  = $builder->getStubObjectBuilder()->getClassname();

        $code      .= '
/**
 * @return ' . $className . '
 */
public function createEntity()
{
    return new ' . $className . '();
}
';

        return $code;
    }
}
