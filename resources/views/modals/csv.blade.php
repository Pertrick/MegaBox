  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">File Content</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" id="collect-user-email" class="btn btn-success">Confirm</button>

                </div>
            </div>
        </div>
    </div>

    <!--Payment Modal -->
    <div class="modal" id="paymentModal" tabindex="-1" role="dialog" tabindex="-1" aria-hidden="true"
        data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Enter your E-mail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="form-inline" style="width:50%; margin:1px auto;">
                        @csrf
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Email" required />
                        </div>
                    
                        <input type="submit" id="proceed-to-pay" class="btn btn-success" value="Make Payment" />
                    </form>
                </div>
            </div>
        </div>
    </div>

