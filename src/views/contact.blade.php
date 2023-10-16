@extends('layouts.horizontalLayout')

@section('content')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-faq.css')}}" />
@endsection

<div class="faq-header d-flex flex-column justify-content-center align-items-center rounded">
  <h3 class="text-center"> Hello, how can we help? </h3>
  <div class="input-wrapper mb-3 input-group input-group-lg input-group-merge">
    <span class="input-group-text" id="basic-addon1"><i class="ti ti-search"></i></span>
    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" />
  </div>
  <p class="text-center mb-0 px-3">or choose a category to quickly find the help you need</p>
</div>

<div class="row mt-4">
  <!-- Navigation -->
  <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
    <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
      <ul class="nav nav-align-left nav-pills flex-column">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#payment">
            <i class="ti ti-credit-card me-1 ti-sm"></i>
            <span class="align-middle fw-semibold">Payment</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
            <i class="ti ti-briefcase me-1 ti-sm"></i>
            <span class="align-middle fw-semibold">Delivery</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">
            <i class="ti ti-rotate-clockwise-2 me-1 ti-sm"></i>
            <span class="align-middle fw-semibold">Cancellation & Return</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#orders">
            <i class="ti ti-box me-1 ti-sm"></i>
            <span class="align-middle fw-semibold">My Orders</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#product">
            <i class="ti ti-settings me-1 ti-sm"></i>
            <span class="align-middle fw-semibold">Product & Services</span>
          </button>
        </li>
      </ul>
      <div class="d-none d-md-block">
        <div class="mt-4">
          <img src="{{asset('assets/img/illustrations/girl-sitting-with-laptop.png')}}" class="img-fluid" width="270" alt="FAQ Image">
        </div>
      </div>
    </div>
  </div>
  <!-- /Navigation -->

  <!-- FAQ's -->
  <div class="col-lg-9 col-md-8 col-12">
    <div class="tab-content py-0">
      <div class="tab-pane fade show active" id="payment" role="tabpanel">
        <div class="d-flex mb-3 gap-3">
          <div>
            <span class="badge bg-label-primary rounded-2 p-2">
              <i class="ti ti-credit-card ti-lg"></i>
            </span>
          </div>
          <div>
            <h4 class="mb-0">
              <span class="align-middle">Payment</span>
            </h4>
            <small>Get help with payment</small>
          </div>
        </div>
        <div id="accordionPayment" class="accordion">
          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionPayment-1" aria-controls="accordionPayment-1">
                When is payment taken for my order?
              </button>
            </h2>

            <div id="accordionPayment-1" class="accordion-collapse collapse show">
              <div class="accordion-body">
                Payment is taken during the checkout process when you pay for
                your order. The order number that appears on the confirmation
                screen indicates payment has been successfully processed.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-2" aria-controls="accordionPayment-2">
                How do I pay for my order?
              </button>
            </h2>
            <div id="accordionPayment-2" class="accordion-collapse collapse">
              <div class="accordion-body">
                We accept Visa®, MasterCard®, American Express®, and PayPal®.
                Our servers encrypt all information submitted to them, so you
                can be confident that your credit card information will be kept
                safe and secure.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-3" aria-controls="accordionPayment-3">
                What should I do if I'm having trouble placing an order?
              </button>
            </h2>
            <div id="accordionPayment-3" class="accordion-collapse collapse">
              <div class="accordion-body">
                For any technical difficulties you are experiencing with our
                website, please contact us at our
                <a href="javascript:void(0);">support portal</a>, or you can call us toll-free at
                <strong>1-000-000-000</strong>, or email us at
                <a href="javascript:void(0);">order@companymail.com</a>
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-4" aria-controls="accordionPayment-4">
                Which license do I need for an end product that is only accessible to paying users?
              </button>
            </h2>
            <div id="accordionPayment-4" class="accordion-collapse collapse">
              <div class="accordion-body">
                If you have paying users or you are developing any SaaS products then you need an Extended License.
                For each products, you need a license. You can get free lifetime updates as well.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPayment-5" aria-controls="accordionPayment-5">
                Does my subscription automatically renew?
              </button>
            </h2>
            <div id="accordionPayment-5" class="accordion-collapse collapse">
              <div class="accordion-body">No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer lollipop sesame snaps.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /FAQ's -->
</div>

<!-- Contact -->
<div class="row mt-5">
  <div class="col-12 text-center mb-4">
    <div class="badge bg-label-primary">Question?</div>
    <h4 class="my-2">You still have a question?</h4>
    <p>If you can't find question in our FAQ, you can Phone,Email or contact us. We'll answer you shortly!</p>
  </div>
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Basic with Icons</h5> <small class="text-muted float-end">Merged input group</small>
      </div>
      <div class="card-body">


        <form action="{{route('contact')}}" method="POST">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="ti ti-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Enter Your Name Here..."/>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Company</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="ti ti-building"></i></span>
                <input type="text" name="company" class="form-control" placeholder="Enter Your company name Here..."/>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="ti ti-mail"></i></span>
                <input type="text" name="email" class="form-control" placeholder="Enter Your Email Here..."/>
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
              </div>
              <div class="form-text"> You can use letters, numbers & periods </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="ti ti-phone"></i></span>
                <input type="text" name="phone" class="form-control phone-mask" placeholder="658 799 8941"/>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="ti ti-message-dots"></i></span>
                <textarea name="message" class="form-control" placeholder="Hi, Do you have a moment to talk CodeFusion ?"></textarea>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row text-center justify-content-center gap-sm-0 gap-3">
  <div class="col-sm-6">
    <div class=" py-3 rounded bg-faq-section text-center">
      <span class="badge bg-label-primary my-3 rounded-2 p-2">
        <i class="ti ti-phone ti-md"></i>
      </span>
      <h4 class="mb-2"><a class="text-body" href="tel:+(810)25482568">+ (810) 2548 2568</a></h4>
      <p>We are always happy to help</p>
    </div>
  </div>
  <div class="col-sm-6">
    <div class=" py-3 rounded bg-faq-section text-center">
      <span class="badge bg-label-primary my-3 rounded-2 p-2">
        <i class="ti ti-mail ti-md"></i>
      </span>
      <h4 class="mb-2"><a class="text-body" href="mailto:help@help.com">help@help.com</a></h4>
      <p>Best way to get a quick answer</p>
    </div>
  </div>
</div>
<!-- /Contact -->

@endsection
