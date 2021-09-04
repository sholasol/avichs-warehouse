<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Page</a></li>
        <li><a href="#">Contact us</a></li>			
    </ul>
    
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="page-title">
                <h2>Contact Us</h2>
            </div>
            
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.170029643329!2d3.594325914770566!3d6.500147495298028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9bcead40cbca680e!2sAvichs%20Warehouse!5e0!3m2!1sen!2sng!4v1623336311486!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
            <div class="info-contact clearfix">
                <div class="col-lg-4 col-sm-4 col-xs-12 info-store">
                    <div class="row">
                        <div class="name-store">
                            <h3>Address</h3>
                        </div>
                        <address>
                            <div class="address clearfix form-group">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="text">Avichs Warehouse, 5, Opposite Amala Folarin, Badore Road, Badore.</div>
                            </div>
                            <div class="phone form-group">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="text">Phone : +234 806 017 7920</div>
                            </div>
                            <div class="comment">             
                                Avichs ventures is a shopping warehouse for different types of fashion items, home appliances, furnitures and more
                            </div>
                        </address>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
                    @if (Session::has('message'))
                    <div class="alert alert-succcess">
                        <h3 style="color: rgb(40, 204, 204);">
                        {{ Session::get('message') }}
                        </h3>
                    </div>
                @endif
                <form  enctype="multipart/form-data" class="form-horizontal" wire:submit.prevent="sendMessage">
                    <fieldset>
                        <legend>Contact Form</legend>
                        <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-name">Your Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name"  id="input-name" class="form-control" wire:model="name">
                        @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                        <div class="col-sm-10">
                            <input type="email" name="email"  id="input-email" class="form-control" wire:model="email">
                            @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
                            <div class="col-sm-10"> 
                                <textarea name="comment" rows="10" id="input-enquiry" class="form-control" wire:model="comment"></textarea>
                                @error('comment')<p class="text-danger">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons">
                        <div class="pull-right">
                            <button class="btn btn-default buttonGray" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>