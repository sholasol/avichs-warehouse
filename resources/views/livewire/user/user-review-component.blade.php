<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Rating and Review</a></li>
    </ul>
    <form wire:submit.prevent="addReview">
    <h2 id="review-title">Write review for </h2>
        <div class="contacts-form">
            <div class="form-group">
            {{-- <b>Rating</b> <span>Bad</span>&nbsp;
            <input type="radio" name="rating" value="1" wire:model="rating"> &nbsp;
            <input type="radio" name="rating"
            value="2" wire:model="rating"> &nbsp;
            <input type="radio" name="rating"
            value="3" wire:model="rating"> &nbsp;
            <input type="radio" name="rating"
            value="4" wire:model="rating" checked> &nbsp;
            <input type="radio" name="rating"
            value="5" wire:model="rating"> &nbsp;<span>Good</span> --}}
            <b>1 Star</b> <span>Low</span>&nbsp;&nbsp;&nbsp;&nbsp; <b>5 Star</b> <span>Excellent</span>
            <div class="rating">
                <input id="star5" name="star" type="radio" value="5" wire:model="rating" class="radio-btn hide" />
                <label for="star5" >☆</label>
                <input id="star4" name="star" type="radio" value="4" wire:model="rating" class="radio-btn hide" />
                <label for="star4" >☆</label>
                <input id="star3" name="star" type="radio" value="3" wire:model="rating"  class="radio-btn hide" />
                <label for="star3" >☆</label>
                <input id="star2" name="star" type="radio" value="2" wire:model="rating" class="radio-btn hide" />
                <label for="star2" >☆</label>
                <input id="star1" name="star" type="radio" value="1" wire:model="rating" class="radio-btn hide" />
                <label for="star1" >☆</label>
                <div class="clear"></div>
            </div>
            
            
            
            </div>
            <p>@error('rating')<span class="text-danger">{{ $message }}</span> @enderror</p>
            <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                <textarea class="form-control" name="text" wire:model="comment">Your Review</textarea>
            </div> 
            <p>@error('comment')<span class="text-danger">{{ $message }}</span> @enderror</p>
            <div class="form-group">
                <input type="submit" name="submit" class="btn buttonGray" value="Submit Review">
            </div>
        </div>
    </form>
    <br><br><br>
</div>













