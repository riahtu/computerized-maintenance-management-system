@extends('layouts.app')

@section('title','| Create Purchase Order')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Create New Purchase Order</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="part-number">Title</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="part-number" placeholder="Add Title..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="modality">Category</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="modality" placeholder="Insert Category..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="category">Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="category" placeholder="Insert Name..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="name">Quantity</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="name" placeholder="Insert Quantity..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="cost">Cost</label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" id="cost" placeholder="Insert Cost..." required>
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4 justify-content-center">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Scripts for this page -->
@endsection
