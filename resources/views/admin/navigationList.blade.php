
@include('admin.public.head')

<div class="animated fadeInRight" >

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
            url:'{{url('navigation/showdata')}}',
            datatype: "json",
            height: 450,
            autowidth: true,
            shrinkToFit: true,
            rowNum: 10,
            rowList: [10, 20, 30,100],
            colNames: ['ID', '导航名称', '图标', 'URL','状态','添加时间'],
            colModel: [
                {name: 'id', index: 'id', editable: true, width: 60, sorttype: "int", search: true, hidden:true, key:true},
                {name: 'name', index: 'name', editable: true, width: 90},
                {name: 'img', index: 'img', editable: true, width: 100,formatter:function(value,row,index){
                    return '<img src='+index.img+' width="30" height="30">';
                }},
                {name: 'url', index: 'url', editable: true, width: 100},
                {name: 'state', index: 'state', editable: true, width: 20, align: "center", sorttype: "int",edittype:'select',formatter : 'select',editoptions : {
                    value:"1 :显示; 0 :隐藏"
                }},
                {name: 'add_time', index: 'add_time', width: 50, align: "center",label:"创建时间",editable:false,formatter:"date",formatoptions: {srcformat:'u',newformat:'Y-m-d H:i:s'}},

            ],
            pager: "#pager_list_2",
            viewrecords: true,
            caption: "",
            add: true,
            edit: true,
            altRows: true,
            multiboxonly: true,
            jsonReader:{repeatitems:false},
            addtext: '添加用户',
            edittext: '编辑会员',
            prmNames:{id:'id'},
            editurl: "{{url('navigation/saveData')}}?_token={{csrf_token()}}",
            hidegrid: false,


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
            //  $('#show_data').html(mydata);
        });
    });


</script>


