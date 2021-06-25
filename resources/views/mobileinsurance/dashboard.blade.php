@extends('mobileinsurance.index')
@section('content')
<div class="dash-title">
    <div class="left">
        <h2>DashBoard</h2>
    </div>
    <div class="right">
        <div class="primarystat">
            Primary State
        </div>
        <div class="secondrystat">
            Secondry State
        </div>
    </div>

</div>
<div class="dash-stat">
    <div class="firststat">
        <div class="icon">
            <img src="image/warrior.jpg" alt="">
        </div>
        <div class="text">
            <span>$10000</span>
            <p>FirstPrice</p>
        </div>
    </div>
    <div class="secndstat">

        <div class="icon">
            <img src="image/warrior.jpg" alt="">
        </div>
        <div class="text">
            <span>$20000</span>
            <p>SecondPrice</p>
        </div>
    </div>
    <div class="thirdstat">

        <div class="icon">
            <img src="image/warrior.jpg" alt="">
        </div>
        <div class="text">
            <span>$30000</span>
            <p>ThirdPrice</p>
        </div>

    </div>
    <div class="fourthstat">
        <div class="icon">
            <img src="image/warrior.jpg" alt="">
        </div>
        <div class="text">
            <span>$40000</span>
            <p>FourthPrice</p>
        </div>

    </div>
</div>

<div class="dash-graph">
    <div class="firstgraph">FirstGraph</div>
    <div class="secondgraph">SecoundGraph</div>
    <div class="thirdgraph">ThirdGraph</div>
    <div class="fourthgraph">FourthGraph</div>
</div>
<div class="dash-others">

</div>
@endsection
s
