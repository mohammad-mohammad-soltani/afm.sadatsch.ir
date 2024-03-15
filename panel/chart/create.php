<?php

require_once(header);
?>
<div class="bg-dark card">
    <div class="card-header">
        <h5>تولید نمودار (CHART)</h5>
        <span>این قابلیت فعلا تنها از نمودار ستونی پشتیبانی میکند</span>
        <br>
        <span>همچنین این قابلیت فعلا تنها از یک نوع ستون پشتیبانی میکند</span>
    </div>
    <div class="card-inner">
        <div class="row">
            <!-- col 1 -->
            <div class="col-6">
                <div>
                    <label for="label">عنوان ستون 1</label>
                    <input type="text" class="form-control" placeholder="عنوان جدول" id="label">
                </div>
                <br>
                <div>
                    <label for="label">اسامی</label>
                    <br>
                    <span>مقادیر را با علامت - جدا نمایید . <br>نکته : تعداد مقادیر با نام ستون ها باید برابری کند</span>
                    <input type="text" class="form-control" placeholder="عنوان جدول" id="names">
                </div>
                <br>
                <div>
                    <label for="label">مقدار ها </label>
                    <br>
                    <span>مقادیر را با علامت - جدا نمایید . <br>نکته : تعداد نام ستون ها با مقادیر  باید برابری کند</span>
                    <input type="text" class="form-control" placeholder="عنوان جدول" id="values">
                </div>
            </div>
            <!-- col 2 -->
            <div class="col-6" id="img-box">
                
            </div>
        </div>
    </div>
</div>
<script>
    let url = "<?php echo url ?>"
</script>
<script src="<?php echo url."chart/chartscript.js" ?>"></script>
<?php
require_once(footer);