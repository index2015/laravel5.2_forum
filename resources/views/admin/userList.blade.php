
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
            url:'{{url('userData')}}',
            datatype: "json",
            height: 450,
            autowidth: true,
            shrinkToFit: true,
            rowNum: 20,
            rowList: [10, 20, 30],
            colNames: ['ID', '用户名', '邮箱', '密码', 'remember_token', '注册时间', '更新时间','分组'],
            colModel: [
                {name: 'id', index: 'id', editable: true, width: 60, sorttype: "int", search: true, hidden:true, key:true},
                {name: 'name', index: 'name', editable: true, width: 90},
                {name: 'email', index: 'email', editable: true, width: 100},
                {name: 'password', index: 'password', editable: true, width: 80, align: "right", sorttype: "int"},
                {name: 'remember_token', index: 'remember_token', editable: false, width: 80, align: "right", sorttype: "float"},
                {name: 'created_at', index: 'created_at', editable: true, width: 80, align: "right", sorttype: "float"},
                {name: 'updated_at', index: 'updated_at', editable: true, width: 100, sortable: false} ,
                {name: 'group', index: 'group', editable: true, width: 100, sortable: false}
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

