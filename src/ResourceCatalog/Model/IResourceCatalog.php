<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
        ),
        IUserGroup::ID['QFGW'] => array(
        ),
        IUserGroup::ID['QWMB'] => array(),
        IUserGroup::ID['QHBJ'] => array(
        ),
        IUserGroup::ID['QWZFW'] => array(
        ),
        IUserGroup::ID['QRMFY'] => array(),
        IUserGroup::ID['QJCY'] => array(
        ),
        IUserGroup::ID['QGAJ'] => array(),
        IUserGroup::ID['QCZJ'] => array(
        ),
        IUserGroup::ID['QGXW'] => array(
        ),
        IUserGroup::ID['QJYJ'] => array(
        ),
        IUserGroup::ID['QSFJ'] => array(
        ),
        IUserGroup::ID['QRSJ'] => array(
        ),
        IUserGroup::ID['QZJJ'] => array(
        ),
        IUserGroup::ID['XRSJ'] => array(
        ),
        IUserGroup::ID['QGBDST'] => array(),
        IUserGroup::ID['QSLJ'] => array(),
        IUserGroup::ID['QLYJ'] => array(),
        IUserGroup::ID['QJTYSJ'] => array(
        ),
        IUserGroup::ID['QLFWs'] => array(
        ),
        IUserGroup::ID['QFGJ'] => array(
        ),
        IUserGroup::ID['QSWJ'] => array(
        ),
        IUserGroup::ID['QMZJ'] => array(),
        IUserGroup::ID['QNYJ'] => array(),
        IUserGroup::ID['QWGXJ'] => array(
        ),
        IUserGroup::ID['QZRZYGHJ'] => array(
        ),
        IUserGroup::ID['QWJW'] => array(
        ),
        IUserGroup::ID['QSHUIWJ'] => array(
        ),
        IUserGroup::ID['QJJD'] => array(
        ),
        IUserGroup::ID['QTJJ'] => array(
        ),
        IUserGroup::ID['QSCJDJ'] => array(
        ),
        IUserGroup::ID['QAJJ'] => array(),
        IUserGroup::ID['QZFJRB'] => array(
        ),
        IUserGroup::ID['QGGZWGLJ'] => array(
        ),
        IUserGroup::ID['QXXZX'] => array(
        ),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['QBWB'] => array(),
        IUserGroup::ID['QKJJ'] => array(
        ),
        IUserGroup::ID['QSJJ'] => array(),
        IUserGroup::ID['QLSJ'] => array(),
        IUserGroup::ID['QCQGZFJ'] => array(),
        IUserGroup::ID['QDAJ'] => array(
        ),
        IUserGroup::ID['QZGH'] => array(),
        IUserGroup::ID['QTW'] => array(
        ),
        IUserGroup::ID['QGDGS'] => array(),
        IUserGroup::ID['QDXGS'] => array(
        ),
        IUserGroup::ID['QYDGS'] => array(
        ),
        IUserGroup::ID['QLTGS'] => array(),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
