<div>
    @if (session()->has('success'))
        <div class="alert alert-success mx-4" role="alert">
            <span class="text-white">
                <strong>Success: </strong> {{ session('success') }}
            </span>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-secondary mx-4" role="alert">
            <span class="text-white">
                <strong>Message: </strong> {{ session('message') }}
            </span>
        </div>
    @endif
    <!--
    
   -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Add New Customer</h5>
                        </div>
                        <a href="#" wire:click.prevent="$emitUp('addNewCustomer')"
                            class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New User</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <form wire:submit.prevent="store">
                            <div class="mb-3 mt-3">
                                <label for="name">Name:</label>
                                <input type="name" class="form-control" id="name" placeholder="Enter Name"
                                wire:model="name">
                                @error('name') <span class="error text-danger">{{ $message }}</span> @enderror

                            </div>

                            

                            <div class="mb-3 mt-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    wire:model="email">
                                    @error('email') <span class="error text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="mb-3">
                                <label for="mobile">Mobile:</label>
                                <input type="text" class="form-control" id="mobile" placeholder="Mobile"
                                wire:model="mobile">
                                @error('mobile') <span class="error text-danger">{{ $message }}</span> @enderror

                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
