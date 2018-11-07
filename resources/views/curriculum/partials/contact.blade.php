<!-- 
================================================== 
    Contact Section Start
================================================== -->
<div class="row">
    <div class="col-md-12">
        <div class="block">
            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contactanos</h2>
            <div class="contact-form">
                    <form id="" method="post" action="{{ route('messages') }}" role="form">
                        {{ csrf_field() }} 
                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                        <input type="text" placeholder="Nombre ..." class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                        <input type="email" placeholder="Email ..." class="form-control" name="email" id="email" >
                    </div>
                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                        <input type="text" placeholder="Asunto ..." class="form-control" name="subject" id="subject">
                    </div>
                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                        <textarea rows="6" placeholder="Mensaje" class="form-control" name="bodyMessage" id="message"></textarea>    
                    </div>
                    <div id="success" class="success">
                        Thank you. The Mailman is on His Way :)
                    </div>
                    <div id="error" class="error">
                        Sorry, don't know what happened. Try later :(
                    </div>
                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>                      
                </form>
            </div>
        </div>
    </div>
</div>