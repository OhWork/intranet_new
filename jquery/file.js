    $(function() {
        listFolderMain();
        initForm();
    });

    function initForm() {
        $("#formFile").ajaxForm({
            url: 'zdc_save_file.php',
            method: 'POST',
            success: function(data) {
                listFile(data);
            }
        });
    }

    function newFolder() {
        var html = $("#dialogNewFolder");
        var d = $(html).dialog({
            title: 'New Folder',
            draggable: false,
            modal: true,
            buttons: {
                'yes': {
                    'text': 'สร้างโฟลเดอร์',
                    'click': function() {
                        newFolderSave();
                        d.dialog("destroy");
                    }
                },
                'no': {
                    'text': 'ยกเลิก',
                    'click': function() {
                        d.dialog("destroy");
                    }
                }
            }
        });
    }

    function newFolderSave() {
        var name = $("input[name=folder_name]").val();
        $.ajax({
            url: 'zdc_save_folder.php',
            data: {
                folder_name: name
            },
            type: 'POST',
            success: function(data) {
                if (data == 'success') {
                    listFolderMain();
                }
            }
        });
    }

    function listFolderMain() {
        $.ajax({
            url: 'zdc_list_folder.php',
            dataType: 'json',
            success: function(data) {
                var html = "";
                html += "<ul>";
                $.each(data, function(k, v) {
                    html += "<li>";
                    html += "<a href='#' class='btn btn-danger'";
                    html += " onclick='removeFolder(" + v.folder_id + ")'>";
                    html += "<i class='glyphicon glyphicon-remove'></i>";
                    html += "</a>";
                    html += "<a href='#' onclick='listFile(" + v.folder_id + ")'>";
                    html += "<i class='glyphicon glyphicon-folder-close'></i> ";
                    html += v.folder_name;
                    html += "</a>";
                    html += "</li>";
                });
                html += "</ul>";
                $("#folderList").html(html);
                $("input[name=folder_name]").val("");
            }
        });
    }

    function removeFolder(folder_id) {
        $.ajax({
            url: 'zdc_delete_folder.php',
            data: {
                folder_id: folder_id
            },
            type: 'POST',
            success: function(data) {
                if (data == 'success') {
                    listFolderMain();
                }
            }
        });
    }

    function showFilePanel() {
        $("#filePanel").show();
    }

    function listFile(folder_id) {
        $("input[name=folder_id]").val(folder_id);
        showFilePanel();
        $.ajax({
            url: "zdc_list_file.php",
            data: {
                folder_id: folder_id
            },
            dataType: 'json',
            success: function(data) {
                var html = "<ul>";
                $.each(data, function(k, v) {
                    html += "<li>";
                    html += "<a href='#' class='btn btn-danger'";
                    html += " onclick='removeFile(" + v.files_id + ")'>";
                    html += "<i class='glyphicon glyphicon-remove'></i>";
                    html += "</a>";
                    html += "<i class='glyphicon glyphicon-file'></i>";
                    html += "<a target='_blank' href='" + v.files_name + "'>";
                    html += v.files_name;
                    html += "</a>";
                    html += "</li>";
                });
                html += "</ul>";
                $("#fileList").html(html);
            }
        });
    }

    function fileUpload() {
        $("#formfile").submit();
    }

    function removeFile(files_id) {
        $.ajax({
            url: 'zdc_delete_file.php',
            data: {
                files_id: files_id
            },
            dataType: 'json',
            success: function(data) {
                listFile(data.folder_id);
            }
        });
    }