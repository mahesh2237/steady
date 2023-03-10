<div>
    @if(session()->has('success'))
        <div class="alert alert-success mx-4" role="alert">
            <span class="text-white">
                <strong>Success: </strong> {{ session('success') }}
            </span>
        </div>
    @endif

    @if(session()->has('message'))
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
                            <h5 class="mb-0">All Customers</h5>
                        </div>
                        <a href="#" wire:click.prevent="$emitUp('addNewCustomer')" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New User</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $c)
                                    @livewire('customer.customer-list-item', ['customer' => $c], key($c->id))
                                @endforeach    
                            </tbody>
                        </table>
                      {!!$customers->render()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
