<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeDoublePublicity
{
    const TYPE_DOUBLE_PUBLICITY = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
		IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['JGJCDXZJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GGXYZHPJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['HRBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['ZYZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['XSPJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SXBZXJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SXBZXRMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['SJQYJSZXRDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['JSZGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SJYXXS'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JYJGXINXI'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GRRYXXJYJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JGRYXXSJYJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['TYXHDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['SFJDJGDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GZJGJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GZYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JCFLFWSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['LSSWSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['LSZYZGZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JGRYXXSSFJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['ZYJNZSXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['YLBXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['YZTQSBXXHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SYBXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SBQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GZRYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['YZTQNMGGZHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QSLHXJJTJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SLYSXKZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['GRRYXXJTJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['LYQXPDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['XJFDPDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['DYZGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['LXSDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GRRYXXLFW'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JGRYXXSLFW'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SPFYSXK'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['FDCKFQYZZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JGRYXXSFGJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['SHZZNJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GRRYXXMZJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GJJLTQYRZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['YXZZDWJBGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GRRYXXGDJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JGRYXXSWGXJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['PGJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['HSZYZGZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['YSZYZCHBGZC'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['YSZYZGZXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['YLHJSFWJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JBYFKZJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['FYCRYJLXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['ZDSSWFAJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
		IResourceCatalog::TYPE['DTJXJGRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['TJDCDXML'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QIYEJBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['GTGSHXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['CMQYSBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['YPLSQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
		IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JXMPCPXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QYZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QYDXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['CCJCJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['WXHXPQYBHGLQD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['DWAQSCHMDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
		IResourceCatalog::TYPE['GRRYXXAJJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JGRYXXSAJGJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['LSTDFWBA'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['SYDWFRDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JXSZLJDW'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['JYZCXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['XZXKQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
		IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['YXQNZYZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QYYH'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QFGRYHXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['QFQYYHXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['DLYHSXHMDJG'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['DLYHSXHMDZRR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['EYQFGRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
		IResourceCatalog::TYPE['EYQFDGRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
		IResourceCatalog::TYPE['EYQFQYXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
		IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
    );
}
