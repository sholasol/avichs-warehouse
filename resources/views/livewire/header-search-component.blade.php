
<form method="GET" action="{{ route('product.search') }}">
    <div id="search0" class="search input-group">

        <input class="autosearch-input form-control" type="text" value="{{ $search }}" size="50" autocomplete="off" placeholder="Search" name="search">
        <span class="input-group-btn">
        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
        </span>
    </div>
</form>