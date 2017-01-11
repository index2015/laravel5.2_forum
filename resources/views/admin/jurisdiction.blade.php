@include('admin.public.head')
<div class="wrapper wrapper-content  animated fadeInRight">

    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        {{CMS}}:权限配置系统已根据权限菜单展现方式,请务必配置路径信息.
    </div>
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
        $("#table_list_2").jqGrid({
            url:'{{url('system/showJurisdictionData')}}',
            datatype: "json",
            height: 450,
            autowidth: true,
            shrinkToFit: true,
            rowNum: 20,
            rowList: [10, 20, 30],
            colNames: ['ID', '分组名称','图标','描述'],
            colModel: [
                {name: 'id', index: 'id', editable: true, width: 10, sorttype: "int", search: true ,hidden:true, key:true},
                {name: 'groupName', index: 'groupName', editable: true, width: 90},
                {name: 'Icon', index: 'Icon', editable: true, width: 100, sortable: false} ,
                {name: 'describe', index: 'describe', editable: true, width: 100, sortable: false}
            ],
            pager: "#pager_list_2",
            subGridOptions: {
                "plusicon"  :'glyphicon glyphicon-plus',
                "minusicon" : 'glyphicon glyphicon-minus',
                "openicon"  : 'glyphicon glyphicon-share-alt',
            },
            viewrecords: true,
            sortorder: "desc",
            multiselect: false,
            subGrid: true,
            add: true,
            edit: true,
            prmNames:{id:'id'},
            editurl: "{{url('system/saveJurisdictionData')}}?_token={{csrf_token()}}",
            hidegrid: false,
            subGridRowExpanded:function(subgrid_id,row_id){
                var subgrid_table_id, pager_id;
                subgrid_table_id = subgrid_id+"_t";
                pager_id = "p_"+subgrid_table_id;
                $("#"+subgrid_id).html(" <table id='"+subgrid_table_id+"' class='jqGrid_wrapper'></table>  <div id='"+pager_id+"' class='scroll'></div>");
                jQuery("#"+subgrid_table_id).jqGrid({
                    url:'{{url('index/adminData')}}',
                    title:false,
                    datatype: "json",
                    colNames: ['ID', '菜单名称', '路径', 'URL', '控路由名称','图标','描述'],
                    colModel: [
                        {name: 'id', index: 'id', editable: true, width: 10, sorttype: "int", search: true ,key:true},
                        {name: 'menu', index: 'menu', editable: true, width: 90},
                        {name: 'Route', index: 'Route', editable: true, width: 100},
                        {name: 'URL', index: 'URL', editable: true},
                        {name: 'RouteName', index: 'RouteName', editable: true, width: 80, align: "right",edittype:"select",editoptions:{dataUrl: '{{url('')}}'}},
                        {name: 'Icon', index: 'Icon', editable: true, width: 100, formatter:function(value,row,index){
                            return ' <i class='+value+'></i> ';
                        }},
                        {name: 'describe', index: 'describe', editable: true, width: 100, sortable: false}
                    ],
                    rowNum:20,
                    pager: pager_id,
                    sortname: 'num',
                    sortorder: "asc",
                    height: '100%'
                });
                jQuery("#"+subgrid_table_id).jqGrid('navGrid',"#"+pager_id,{edit:false,add:false,del:false})

            }
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
