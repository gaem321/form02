<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหารายชื่อนักเรียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --bs-primary: #7b2cbf;
            --bs-primary-rgb: 123, 44, 191;
        }

        body {
            background: #f8f5fc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card-header {
            background-color: var(--bs-primary) !important;
        }

        .btn-primary {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        .btn-primary:hover {
            background-color: #5a189a;
            border-color: #5a189a;
        }

        .form-control:focus {
            border-color: #9d4edd;
            box-shadow: 0 0 0 0.2rem rgba(157, 78, 221, 0.25);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header text-white text-center py-3">
                        <h1 class="h4 mb-0"><i class="bi bi-search"></i> ค้นหารายชื่อนักเรียนห้อง 609</h1>
                    </div>
                    <div class="card-body">
                        <form action="search.php" method="GET">
                            <div class="mb-3">
                                <label for="search_keyword" class="form-label"><b>ค้นหาจากชื่อ, เลขที่, หรือเลขประจำตัว</b></label>
                                <input type="text" class="form-control" id="search_keyword" name="keyword" placeholder="กรอกคำค้นหา...">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-search"></i> ค้นหา
                            </button>
                        </form>
                    </div>
                    <div class="card-footer text-center text-muted small">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

