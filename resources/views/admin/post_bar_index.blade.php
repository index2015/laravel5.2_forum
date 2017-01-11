@include('admin.public.head')
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
<script>
    $(document).ready(function () {
        $.jgrid.defaults.styleUI = 'Bootstrap';
        var topicjson={
            "response": [
                {
                    "id": "1",
                    "elementName": "Grouping",
                    level:"0", parent:"", isLeaf:false, expanded:false, loaded:true
                },
                {
                    "id": "1_1",
                    "elementName": "Simple Grouping",
                    level:"1", parent:"1", isLeaf:true, expanded:false, loaded:true
                },
                {
                    "id": "1_2",
                    "elementName": "May be some other grouping",
                    level:"1", parent:"1", isLeaf:true, expanded:false, loaded:true
                },
                {
                    "id": "2",
                    "elementName": "CustomFormater",
                    level:"0", parent:"", isLeaf:false, expanded:true, loaded:true
                },
                {
                    "id": "2_1",
                    "elementName": "Image Formatter",
                    level:"1", parent:"2", isLeaf:true, expanded:false, loaded:true
                },
                {
                    "id": "2_1",
                    "elementName": "Anchor Formatter",
                    level:"1", parent:"2", isLeaf:true, expanded:false, loaded:true
                }
            ]
        };

        $("#table_list_2").jqGrid({
            url:'{{url('PostBar/showData')}}',
//            datastr: topicjson,
            datatype: "json",
            height: 450,

            autowidth: true,
            shrinkToFit: true,
            rowNum: 10,
            rowList: [10, 20, 30,100],
            colNames: ['ID','层次', '贴吧名称','描述','缩略图','状态','添加时间'],
            colModel: [
                {name: 'PId', index: 'PId', editable: true, width: 60, sorttype: "int", search: true, hidden:true, key:true},
                {name: 'The' ,hidden:true,index: 'The',editable: true,edittype:"select",editrules:{edithidden:true},editoptions:{dataUrl: '{{url("PostBar/selectData")}}'}},
                {name: 'bar_name', index: 'bar_name', editable: true, width: 90},
                {name: 'describe', index: 'describe', editable: true, width: 90,edittype:'textarea'},
                {name: 'thumbnail', index: 'thumbnail', editable: true, width: 100,formatter:function(value,row,index){
                    return '<img src='+index.thumbnail+' width="30" height="30">';
                }}, {name: 'state', index: 'state', editable: true, width: 20, align: "center", sorttype: "int",edittype:'select',formatter : 'select',editoptions : {value:"1 :显示; 0 :隐藏"}},
                {name: 'add_time', index: 'add_time', width: 50, align: "center",label:"创建时间",editable:false,formatter:"date",formatoptions: {srcformat:'u',newformat:'Y-m-d H:i:s'}},
            ],
            gridComplete:function(){
                this_success("操作成功");
            },
            pager: "#pager_list_2",
            viewrecords: true,
            caption: "帖吧管理",
            add: true,
            edit: true,
            altRows: true,
            multiboxonly: true,
            treeGrid: false,
            ExpandColumn : 'PId',
            jsonReader:{repeatitems:false},
            addtext: '添加帖吧',
            edittext: '编辑帖吧',
            prmNames:{PId:'PId'},
            editurl: "{{url('PostBar/saveData')}}?_token={{csrf_token()}}",
            hidegrid: false
        });

        // Add selection
        $("#table_list_2").setSelection(4, true);

        //新增、修改、删除
        $("#table_list_2").jqGrid('navGrid', '#pager_list_2',
                {edit: true, add: true, del: true, search: true,view: true},
                {height: 200,reloadAfterSubmit: true},
                {recreateForm: true},
                {closeAfterAdd: true,recreateForm: true,viewPagerButtons: false,onInitializeForm : function(formid) {
                    alert("IJ");
                }},
                {recreateForm: true},
                {recreateForm: true,sopt : ['eq','cn']}
        );
        // Add responsive to jqGrid
        $(window).bind('resize', function () {
            var width = $('.jqGrid_wrapper').width();
            $('#table_list_2').setGridWidth(width);
        });
    });


</script>





