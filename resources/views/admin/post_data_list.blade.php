
@include('admin.public.head')


<div id="show_data"></div>

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox ">

                <div class="ibox-content">
                    <div class="jqGrid_wrapper">
                        <table id="table_list_2"></table>
                        <div id="pager_list_2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.public.tail')
        <!-- Page-Level Scripts -->
<script>
    $(document).ready(function () {
        $.jgrid.defaults.styleUI = 'Bootstrap';
        $("#table_list_2").jqGrid({
            url:'{{url('PostBar/postDataList?dataType=data')}}',
            datatype: "json",
            height: 450,
            autowidth: true,
            shrinkToFit: true,
            rowNum: 20,
            rowList: [10, 20, 30],
            colNames: ['ID', '帖子', '内容', '发布者', '所属分组', '发布时间', '收藏次数','阅读量','状态','是否精华','是否置顶','评论次数'],
            colModel: [
                {name: 'id', index: 'id', editable: true, width: 60, sorttype: "int", search: true, hidden:true, key:true},
                {name: 'postName', index: 'postName', editable: true, width: 90},
                {name: 'postContent', index: 'postContent', editable: true, width: 100,formatter:function(value,row,index){
                    var id=index.id;
                    var postBar=index.postBar;
                    return '<a href="{{url('forum/showPost?')}}id='+id+'&postBar='+postBar+'" target="_blank">连接+</a>';
                }},
                {name: 'postUid', index: 'postUid', editable: true, width: 80, align: "right", sorttype: "int"},
                {name: 'postBar', index: 'postBar', editable: true, width: 80, align: "right",edittype:"select", editrules:{edithidden:true},editoptions:{dataUrl: '{{url("PostBar/Grouping?postBar=7")}}'}},
                {name: 'postAddTime', index: 'postAddTime', editable: false, width: 80, align: "right", formatter:"date",formatoptions: {srcformat:'u',newformat:'Y-m-d H:i:s'}},
                {name: 'postCollectionTimes', index: 'postCollectionTimes', editable: false, width: 100, sortable: false} ,
                {name: 'postAccessTimes', index: 'postAccessTimes', editable: false, width: 100, sortable: false},
                {name: 'postStatePost', index: 'postStatePost', editable: true, width: 100, sorttype: "int",edittype:'select',formatter : 'select',editoptions : {value:"1 :禁止; 0 :显示;2:讨论对象"}},
                {name: 'postEssence', index: 'postEssence', editable: true, width: 100, sorttype: "int",edittype:'select',formatter : 'select',editoptions : {value:"1 :是; 0 :否"}},
                {name: 'postTop', index: 'postTop', editable: true, width: 100, sorttype: "int",edittype:'select',formatter : 'select',editoptions : {value:"1 :是; 0 :否"}},
                {name: 'numberOfReviews', index: 'numberOfReviews', editable: true, width: 100, sorttype: "int"},
            ],
            pager: "#pager_list_2",
            viewrecords: true,
            caption: "会员管理",
            add: true,
            edit: true,
            addtext: '添加用户',
            edittext: '编辑会员',
            prmNames:{id:'id'},
            editurl: "{{url('indexUpdate')}}",
            hidegrid: false
        });

        // Add selection
        $("#table_list_2").setSelection(4, true);

        //新增、修改、删除
        $("#table_list_2").jqGrid('navGrid', '#pager_list_2', {edit: true, add: true, del: true, search: true,view: true},
                {height: 200,reloadAfterSubmit: true},
                {recreateForm: true},
                {closeAfterAdd: true,recreateForm: true,viewPagerButtons: false},
                {recreateForm: true},
                {recreateForm: true,sopt : ['eq','cn']}
        );
        // Add responsive to jqGrid
        $(window).bind('resize', function () {
            var width = $('.jqGrid_wrapper').width();
            $('#table_list_2').setGridWidth(width);
            //  $('#show_data').html(mydata);
        });

    });
</script>

