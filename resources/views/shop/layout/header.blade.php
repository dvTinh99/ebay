<!DOCTYPE html>
<html lang="vn">

<head>



    <!-- Favicon -->
    <link rel="icon" href="https://www.ebeebbuy.cc/public/uploads/all/VwBQ1GmLLisBmocOWOdSycMpbviwKwNHz3A8cFzD.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://www.ebeebbuy.cc/public/assets/css/vendors.css">
    {{-- <link rel="stylesheet" href="https://www.ebeebbuy.cc/public/assets/css/aiz-core.css?v-23">
    <link rel="stylesheet" href="https://www.ebeebbuy.cc/public/assets/css/custom-style.css"> --}}
    <link rel="stylesheet" href="<?= asset('/kho')?>/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= asset('/shop')?>/assets/css/aiz-core.css">

    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Không có gì được chọn',
            nothing_found: 'Không kết quả',
            choose_file: 'Chọn tập tin',
            file_selected: 'Tệp đã chọn',
            files_selected: 'Tệp đã chọn',
            add_more_files: 'Thêm nhiều tập tin',
            adding_more_files: 'Thêm nhiều tập tin',
            drop_files_here_paste_or: 'Thả tệp vào đây, dán hoặc',
            browse: 'Duyệt qua',
            upload_complete: 'Tải lên hoàn tất',
            upload_paused: 'Đã tạm dừng tải lên',
            resume_upload: 'Tiếp tục Tải lên',
            pause_upload: 'Tạm dừng tải lên',
            retry_upload: 'Thử tải lên lại',
            cancel_upload: 'Hủy tải lên',
            uploading: 'Đang tải lên',
            processing: 'Xử lý',
            complete: 'Hoàn thành',
            file: 'Tập tin',
            files: 'Các tập tin',
        }
    </script>
    <style>
        html {
            overflow: hidden;
            height: 100%;
            margin: 0;
            padding: 0;
            border: none;
        }

        body {
            position: relative;
            box-sizing: border-box;
            margin: 0;
            height: 100%;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }

        :root {
            --primary: #27d6bf;
            --hov-primary: #27d6bf;
            --soft-primary: rgba(39, 214, 191, 0.15);
        }

        #map {
            width: 100%;
            height: 250px;
        }

        #edit_map {
            width: 100%;
            height: 250px;
        }

        .pac-container {
            z-index: 100000;
        }
    </style>




</head>
