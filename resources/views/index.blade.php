<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="get">
        <label for="email-input">Email:</label>
        <input id="email-input" type="email" placeholder="Nhập email cần kiểm tra" name="email">
        <input type="submit" value="Check">
    </form>

    @if(!empty(request('email')))
        ket qua: {{$check?'dung dinh dang email':'sai dinh dang email'}}
    @endif;
</div>