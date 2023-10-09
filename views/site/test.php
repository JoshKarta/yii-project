<?php


/** @var yii\web\View $this */

$this->title = "Test";
$this->registerJs("
    Toast();
    Stepper();
");

?>

<div class="container">
    <div class="pt-4">
        <h1 class="text-center">This a test page</h1>

        <!-- Components testing section -->
        <h3>Components testing section</h3>
        <div>
            <div class="row mt-5">
                <div class="col">
                    <div class="d-flex flex-column align-items-center  ">
                        <p class="pb-3">Menu</p>

                        <!-- Button trigger menu -->
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            Button with data-bs-target
                        </button>

                        <!-- Menu -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div>
                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                                </div>
                                <div class="dropdown mt-3">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        Dropdown button
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column align-items-center ">
                        <p class="pb-3">Modal</p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="d-flex flex-column align-items-center  ">
                        <p class="pb-3">Toast</p>

                        <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

                        <div class="toast-container position-fixed top-0 end-0 p-3">
                            <div id="liveToast" class="toast bg-white" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <img src="..." class="rounded me-2" alt="...">
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column align-items-center ">
                        <p class="pb-3">Accordian</p>

                        <!-- Accordian -->
                        <div class="accordion w-100 " id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stepper testing section -->
        <h3>Stepper testing section</h3>
        <div class="row mt-5">
            <div id="form-a">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div>
                <div class="input-group mb-3" id="form-b" style="display:none">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <button type="button" class="btn btn-success" id="prevBtn" style="display:none">Previous</button>
                <button type="button" class="btn btn-success" id="nextBtn">Next</button>
            </div>
        </div>

        <!-- Form testing Section -->
        <div class="mt-5">
            <h3>Form testing Section</h3>
            <?= $this->render('@app/views/countries/_form', [
                'model' => $model,
            ]) ?>
        </div>

    </div>
</div>