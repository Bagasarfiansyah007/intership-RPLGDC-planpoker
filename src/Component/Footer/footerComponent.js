import './footerComponent.css';
import React from 'react';


class Footer extends React.Component {
  render() {
    return (
      <div className = "footer1">
        <div className = "container">
         <div className = "row">
          
          <div className = "col-sm-5 titel">
            <ul>
              <li><img sizes="30" src="data:image/jpeg;base64,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"></img></li>
              <li><h1>RPL-GDC</h1></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              sed do eiusmod tempor incididunt ut labore et dolore
              labore et dolore Ut enim ad minim veniam
            </p>
          </div>

          <div className = "col-sm-7">
            <div className ="row">
              <div className = "col-sm-3">
                <h1>About</h1>
                <ul>
                  <li>Tentang</li>
                  <li>Contact</li>
                  <li>Gallery</li>
                  <li>Portofolio</li>
                </ul>
              </div>

              <div className = "col-sm-3">
                <h1>Faq</h1>
                <ul>
                  <li>Bagaimana caranya ?</li>
                  <li>contact us</li>
                  <li>call center</li>
                </ul>
              </div>

              <div className = "col-sm-3">
                <h1>Contact</h1>
                <ul>
                  <li>instagram</li>
                  <li>gmail</li>
                  <li>089213132212</li>
                </ul>
              </div>

              <div className = "col-sm-3">
                <h1>Website</h1>
                <ul>
                  <li>instagram</li>
                  <li>gmail</li>
                  <li>089213132212</li>
                </ul>
              </div>

            </div>
          </div>
         </div>
        </div> 
      </div>
    );
  }
}

export default Footer;