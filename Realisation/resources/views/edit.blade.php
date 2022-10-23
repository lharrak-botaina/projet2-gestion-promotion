<div class="main-content">
    <h1 class="titre text-center ">
        <strong>edit promotion</strong>
    </h1>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <!-- form -->
                        <div class="card-header">edit promotion</div>
                        <div class="card-body">


                                 <form action="{{ route('promotion.update',$edit->id) }}" enctype="multipart/form-data" method="POST" novalidate="novalidate">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group ">
                                                <label for="cc-exp" class="control-label mb-1">Nom</label>
                                                <input id="cc-exp" name="name" type="text"
                                                     value="{{$edit->name}}" >

                                            </div>
                                        </div>





                                    </div>
                                    <div class="col-6">
                                        <p>
                                          .
                                        </p>
                                    </div>
                                    <div class="">
                                        <button class="btn btn-info au-btn--block " type="submit"> Update </button>


                                    </div>
                        </div>
                        </form>

                    </div>
                </div>
                <!-- fin -->
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
</div>
