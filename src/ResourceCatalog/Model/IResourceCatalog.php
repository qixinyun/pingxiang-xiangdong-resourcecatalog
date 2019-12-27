<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'JGJCDXZJL' => 3,
        'SJJXMXX' => 4,
        'GGXYZHPJ' => 5,
        'HRBXX' => 6,
        'ZYZXX' => 7,
        'CPTGLSZXCPRZMD' => 8,
        'XSPJXX' => 9,
        'SXBZXJGXX' => 10,
        'SXBZXRMD' => 11,
        'YSCRJZJJJZGRDXX' => 12, 
        'JDCWFXX' => 13,
        'ZFCGDLJGXX' => 14,
        'SJQYJSZXRDXX' => 15,
        'JSZGXX' => 16,
        'SJYXXS' => 17,
        'JYJGXINXI' => 18,
        'GRRYXXJYJ' => 19,
        'JGRYXXSJYJ' => 20,
        'TYXHDJXX' => 21,
        'SFJDJGCYRYZGXX' => 22,
        'SFJDJGDJXX' => 23,
        'GZJGJBXX' => 24,
        'GZYXX' => 25,
        'JCFLFWSXX' => 26,
        'JCFLFWGZZJBXX' => 27,
        'LSSWSXX' => 28,
        'LSZYZGZXX' => 29,
        'JGRYXXSSFJ' => 30,
        'ZYJNZSXX' => 31,
        'YLBXXX' => 32,
        'YZTQSBXXHMD' => 33,
        'SYBXXX' => 34,
        'SBQYXX' => 35,
        'GZRYXX' => 36,
        'YZTQNMGGZHMD' => 37,
        'QSLHXJJTJL' => 38,
        'SLYSXKZXX' => 39,
        'GRRYXXJTJ' => 40,
        'LYQXPDXX' => 41,
        'XJFDPDXX' => 42,
        'DYZGXX' => 43,
        'LXSDJXX' => 44,
        'GRRYXXLFW' => 45,
        'JGRYXXSLFW' => 46,
        'SPFYSXK' => 47,
        'FDCKFQYZZXX' => 48,
        'JGRYXXSFGJ' => 49,
        'ESCJDPGJGHZZS' => 50,
        'SHZZNJXX' => 51,
        'GRRYXXMZJ' => 52,
        'MBFQYML' => 53,
        'SHTTDJXX' => 54,
        'GJJLTQYRZXX' => 55,
        'YXZZDWJBGXX' => 56,
        'GRRYXXGDJ' => 57,
        'JGRYXXSWGXJ' => 58,
        'PGJGXX' => 59,
        'HSZYZGZXX' => 60,
        'YSZYZCHBGZC' => 61,
        'YSZYZGZXX' => 62,
        'WSHJHSYWYHJCXX' => 63,
        'YLHJSFWJGXX' => 64,
        'JBYFKZJGXX' => 65,
        'FYCRYJLXX' => 66,
        'WSZYJSZGKSWJXX' => 67,
        'QSWCXXXJDWBZ' => 68,
        'QYGSZXXX' => 69,
        'AJNSRXX' => 70,
        'ZDSSWFAJXX' => 71,
        'QYDSXZCFXX' => 72,
        'DTJXJGRXX' =>73,
        'TJDCDXML' => 74,
        'QIYEJBXX' => 75,
        'GTGSHXX' => 76,
        'CMQYSBXX' => 77,
        'YPLSQYXX' => 78,
        'JGRYXX' => 79,
        'SXQYHMD' => 80,
        'SPYPTSJBJLGR' => 81,
        'SPYPTSJBJLDW' => 82,
        'JXMPCPXX' => 83,
        'QYYCMLXX' => 84,
        'QYZXXX' => 85,
        'QYDXXX' => 86,
        'CCJCJGXX' => 87,
        'WXHXPQYBHGLQD' => 88,
        'DWAQSCHMDXX' => 89,
        'GRRYXXAJJ' => 90,
        'JGRYXXSAJGJ' => 91,
        'LSTDFWBA' => 92,
        'SYDWFRDJXX' => 93,
        'JXSZLJDW' => 94,
        'JYZCXXX' => 95,
        'XZXKQYXX' => 96,
        'DZDAGZZDWGRBZJL' => 97,
        'YXQNZYZ' => 98,
        'QYYH' => 99,
        'QFGRYHXX' => 100,
        'QFQYYHXX' => 101,
        'DLYHSXHMDJG' => 102,
        'DLYHSXHMDZRR' => 103,
        'EYQFGRXX' => 104,
        'EYQFDGRXX' => 105,
        'EYQFQYXX' => 106,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
        ),
        IUserGroup::ID['QFGW'] => array(
            self::TYPE['JGJCDXZJL'],
            self::TYPE['TEST'],
            self::TYPE['SJJXMXX'],
            self::TYPE['GGXYZHPJ']
        ),
        IUserGroup::ID['QWMB'] => array(
            self::TYPE['HRBXX'],
            self::TYPE['ZYZXX']
        ),
        IUserGroup::ID['QHBJ'] => array(
            self::TYPE['CPTGLSZXCPRZMD']
        ),
        IUserGroup::ID['QWZFW'] => array(
        ),
        IUserGroup::ID['QRMFY'] => array(
            self::TYPE['XSPJXX'],
            self::TYPE['SXBZXJGXX'],
            self::TYPE['SXBZXRMD']
        ),
        IUserGroup::ID['QJCY'] => array(
        ),
        IUserGroup::ID['QGAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'], 
            self::TYPE['JDCWFXX']
        ),
        IUserGroup::ID['QCZJ'] => array(
            self::TYPE['ZFCGDLJGXX']
        ),
        IUserGroup::ID['QGXW'] => array(
            self::TYPE['SJQYJSZXRDXX']
        ),
        IUserGroup::ID['QJYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['TYXHDJXX']
        ),
        IUserGroup::ID['QSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ']
        ),
        IUserGroup::ID['QRSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD']
        ),
        IUserGroup::ID['QZJJ'] => array(
        ),
        IUserGroup::ID['XRSJ'] => array(
        ),
        IUserGroup::ID['QGBDST'] => array(),
        IUserGroup::ID['QSLJ'] => array(),
        IUserGroup::ID['QLYJ'] => array(
            self::TYPE['QSLHXJJTJL']
        ),
        IUserGroup::ID['QJTYSJ'] => array(
            self::TYPE['SLYSXKZXX'], 
            self::TYPE['GRRYXXJTJ']
        ),
        IUserGroup::ID['QLFW'] => array(
            self::TYPE['LYQXPDXX'],
            self::TYPE['XJFDPDXX'],
            self::TYPE['DYZGXX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRRYXXLFW'],
            self::TYPE['JGRYXXSLFW'],
        ),
        IUserGroup::ID['QFGJ'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX'],
            self::TYPE['JGRYXXSFGJ']
        ),
        IUserGroup::ID['QSWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS']
        ),
        IUserGroup::ID['QMZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX']
        ),
        IUserGroup::ID['QNYJ'] => array(
            self::TYPE['GJJLTQYRZXX']
        ),  
        IUserGroup::ID['QWGXJ'] => array(
            self::TYPE['YXZZDWJBGXX'],
            self::TYPE['GRRYXXGDJ'],
            self::TYPE['JGRYXXSWGXJ']
        ),
        IUserGroup::ID['QZRZYGHJ'] => array(
            self::TYPE['PGJGXX']
        ),
        IUserGroup::ID['QWJW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ']
        ),
        IUserGroup::ID['QSHUIWJ'] => array(
            self::TYPE['QYGSZXXX'], 
            self::TYPE['AJNSRXX'], 
            self::TYPE['ZDSSWFAJXX'],
            self::TYPE['QYDSXZCFXX']
        ),
        IUserGroup::ID['QJJD'] => array(
        ),
        IUserGroup::ID['QTJJ'] => array(
            self::TYPE['DTJXJGRXX'], 
            self::TYPE['TJDCDXML']
        ),
        IUserGroup::ID['QSCJDJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX']
        ),
        IUserGroup::ID['QAJJ'] => array(
            self::TYPE['WXHXPQYBHGLQD'],
            self::TYPE['DWAQSCHMDXX'],
            self::TYPE['GRRYXXAJJ'],
            self::TYPE['JGRYXXSAJGJ']
        ),
        IUserGroup::ID['QZFJRB'] => array(
        ),
        IUserGroup::ID['QGGZWGLJ'] => array(
            self::TYPE['LSTDFWBA']
        ),
        IUserGroup::ID['QXXZX'] => array(
        ),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['QBWB'] => array(
            self::TYPE['SYDWFRDJXX']
        ),
        IUserGroup::ID['QKJJ'] => array(
            self::TYPE['JXSZLJDW']
        ),
        IUserGroup::ID['QSJJ'] => array(),
        IUserGroup::ID['QLSJ'] => array(
            self::TYPE['JYZCXXX']
        ),
        IUserGroup::ID['QCQGZFJ'] => array(
            self::TYPE['XZXKQYXX']
        ),
        IUserGroup::ID['QDAJ'] => array(
            self::TYPE['DZDAGZZDWGRBZJL']
        ),
        IUserGroup::ID['QZGH'] => array(),
        IUserGroup::ID['QTW'] => array(
            self::TYPE['YXQNZYZ']
        ),
        IUserGroup::ID['QGDGS'] => array(
            self::TYPE['QYYH'],
            self::TYPE['QFGRYHXX'],
            self::TYPE['QFQYYHXX'],
            self::TYPE['DLYHSXHMDJG'],
            self::TYPE['DLYHSXHMDZRR'],
        ),
        IUserGroup::ID['QDXGS'] => array(
            self::TYPE['EYQFGRXX']
        ),
        IUserGroup::ID['QYDGS'] => array(
            self::TYPE['EYQFDGRXX']
        ),
        IUserGroup::ID['QLTGS'] => array(
            self::TYPE['EYQFQYXX']
        ),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
