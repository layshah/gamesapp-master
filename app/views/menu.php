<div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills nav-justified thumbnail">
                <li <?php if($ActivePage == "home"){echo "class='active'";} ?>><a href="#">
                    <h4 class="list-group-item-heading">Step 1</h4>
                    <p class="list-group-item-text">Provide Details</p>
                </a></li>
                <li <?php if($ActivePage == "apt"){echo "class='active'";} ?> ><a href="#">
                    <h4 class="list-group-item-heading">Step 2</h4>
                    <p class="list-group-item-text">Passion Predictor</p>
                </a></li>
                <li <?php if($ActivePage == "dom"){echo "class='active'";}else{} ?> ><a href="#">
                    <h4 class="list-group-item-heading">Step 3</h4>
                    <p class="list-group-item-text">Aptitude - Domain Knowledge</p>
                </a></li>
                <li <?php if($ActivePage == "final"){echo "class='active'";}else{echo "class='disabled'";} ?>><a href="#">
                    <h4 class="list-group-item-heading">Step 4</h4>
                    <p class="list-group-item-text">Altitude - Choose Slot</p>
                </a></li>
            </ul>
        </div>
    </div>