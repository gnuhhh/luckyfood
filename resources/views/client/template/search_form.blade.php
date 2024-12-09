<div class="hero__search">
    <div class="hero__search__form">
        <form action="{{ route('search') }}" method="get">
            @csrf
            <input class="ajaxSearch" name="key" type="text" placeholder="Nhập sản phẩm tìm kiếm....">
            
            <button type="submit" class="site-btn">Search</button>
        </form>
        
    </div>
    <div class="list-group resultSearch">
    </div>
    <div class="hero__search__phone">
        <div class="hero__search__phone__icon">
            <i class="fa fa-phone"></i>
        </div>
        <div class="hero__search__phone__text">
            <h5>1900 0091</h5>
        </div>
    </div>
</div>

