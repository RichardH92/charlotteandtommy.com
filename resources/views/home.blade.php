@extends('layouts.base')

@section('content')
  <section class="section -hero" id="hero">
    <div class="wrap">
      <div class="centered">
        <h1>
          Charlotte <em>&amp;</em> Tommy
        </h1>
        <p class="date">August 19th, 2016</p>
      </div>
    </div>
  </section>

  <section class="section -mass" id="mass">
    <div class="wrap">
      <div class="col -half -blue">
        <h3>Mass</h3>
        <p class="sub-heading">3:00 PM</p>
        <p>
          <strong>St. John the Evangelist</strong><br>
          72 S Main St.<br>
          Concord, NH 03301<br>
        </p>
        <a href="https://www.google.com/maps/dir/''/72+S+Main+St,+Concord,+NH+03301/" class="button">View Map</a>
      </div>
      <div class="col -half -green">
        <h3>Reception</h3>
        <p class="sub-heading">5:00 PM - 12:00 PM</p>
        <p>
          <strong>The Courtyard Marriott</strong><br>
          70 Constitution Ave<br>
          Concord, NH 03301<br>
        </p>
        <a href="https://www.google.com/maps/dir/''/courtyard+marriott+concord,+nh/" class="button">View Map</a>
      </div>
    </div>
  </section>

  <section class="section -accommodations" id="accommodations">
    <div class="wrap">
      <div class="accommodations">
        <h3>Accommodations</h3>
        <div class="accommodation">
          <p>
            <strong>The Courtyard Marriott</strong><br>
            70 Constitution Ave<br>
            Concord, NH 03301<br>
          </p>
          <a href="tel:6032250303" class="button">Call (603) 225-0303</a> <span class="and-spacer">and</span>
          <a href="https://www.google.com/maps/dir/''/72+S+Main+St,+Concord,+NH+03301/" class="button">View Map</a>
        </div>
        <div class="accommodation">
          <p>
            <strong>The Holiday Inn</strong><br>
            70 Constitution Ave<br>
            Concord, NH 03301<br>
          </p>
          <a href="tel:6032249534" class="button">Call (603) 224-9534</a> <span class="and-spacer">and</span>
          <a href="https://www.google.com/maps/dir/''/72+S+Main+St,+Concord,+NH+03301/" class="button">View Map</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section -photos" id="photos">
    <div class="wrap">
      <div class="photos-list" data-module="gallery">
        <div>
          <a href="/images/gallery/1600/26700483813_54c4cb2826_h.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/26700483813_54c4cb2826_h.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4642.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4642.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4454.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4454.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/26700489473_29737abf7f_h.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/26700489473_29737abf7f_h.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4596.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4596.jpg" alt="">
          </a>
        </div>
      </div>
      <div class="photos-list" data-module="gallery">
        <div>
          <a href="/images/gallery/1600/DSC_4662.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4662.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/27209861172_b5cdf38cad_h.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/27209861172_b5cdf38cad_h.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4598.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4598.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4688.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4688.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/27306862715_17d9fef0d5_h.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/27306862715_17d9fef0d5_h.jpg" alt="">
          </a>
        </div>
      </div>
      <div class="photos-list" data-module="gallery">
        <div>
          <a href="/images/gallery/1600/DSC_4693.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4693.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4628.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4628.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4689.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4689.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4418.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4418.jpg" alt="">
          </a>
        </div>
        <div>
          <a href="/images/gallery/1600/DSC_4639.jpg" class="gallery-image">
            <img src="/images/gallery/thumbs/DSC_4639.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section -rsvp" id="rsvp">
    <div class="wrap -thin">
      <div data-module="rsvp">
        <h2>
          Can you make it?
        </h2>

        <div class="rsvp-buttons">
          <button data-to="yes" class="button">Gladly Accept</button><button data-to="no" class="button -light">Regretfully Decline</button>
        </div>

        <div class="rsvp-yes -show">
          <form action="" method="post">
            <fieldset>
              <input type="hidden" name="accept" value="yes">
              <div class="form-row -name">
                <label for="name">Full Name and Guest</label>
                <input type="text" name="name" id="name" placeholder="Mr. and Mrs. Benjamin Franklin" required>
              </div>
              <div class="form-row -food">
                <div class="form-col">
                  <label for="rib-eye-steak">Rib Eye<br>Steak</label>
                  <input type="text" class="short" name="beef" placeholder="0" id="rib-eye-steak">
                </div>
                <div class="form-col">
                  <label for="zuccini-ricatto">Zuccini<br>Ricatto</label>
                  <input type="text" class="short" name="vegetarian" placeholder="0" id="zuccini-ricatto">
                </div>
                <div class="form-col">
                  <label for="chicken-fingers">Childrens<br>Meal</label>
                  <input type="text" class="short" name="childrens_meal" placeholder="0" id="chicken-fingers">
                </div>
              </div>
              <div class="form-row">
                <label for="message">A Message to the Bride and Groom</label>
                <textarea name="message" id="message"></textarea>
              </div>
              <div class="form-row">
                <input type="submit" value="Send RSVP" class="button">
              </div>
            </fieldset>
          </form>
        </div>
        <div class="rsvp-no">
          <form action="" method="POST">
            <fieldset>
              <h3>We are sorry to miss you!</h3>
              <input type="hidden" name="accept" value="no">
              <div class="form-row">
                <label for="name">Full Name and Guest</label>
                <input type="text" name="name" id="name">
              </div>
              <div class="form-row">
                <label for="message">A Message to the Bride and Groom</label>
                <textarea name="message" id="message"></textarea>
              </div>
              <div class="form-row">
                <input type="submit" value="Send RSVP" class="button">
              </div>
            </fieldset>
          </form>
        </div>
      </div>

    </div>
  </section>
@endsection