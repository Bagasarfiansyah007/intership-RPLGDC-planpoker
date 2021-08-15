import './homePage.css';
import React from 'react';
import Footer from '../../Component/Footer/footerComponent';
import Header from '../../Component/Header/headerComponent';
class Homepage extends React.Component {
    render() {
      return (
        <React.StrictMode>
        <Header />
        
        <div className = "hero1">
            <div className = "container">
            <div className = "row">
                <div className = "col-sm-6 gambar">
                    <img src = "https://raw.githubusercontent.com/Bagasarfiansyah007/intership-RPLGDC-planpoker/Front-end---Bagas/ILLUSTRASI.png"></img>
                </div>
                <div className = "col-sm-6 deskripsi">
                    <h1>Plan It In <br></br> A <span>Fun</span> Way</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex is aute irure dolor
                    </p>
                    <div className = "sectionbtn">
                    <button className = "btn btn-primary">Jump In</button>
                    </div>
                </div>
                <div className = "col-sm-6 gambar2">
                    <img src = "https://raw.githubusercontent.com/Bagasarfiansyah007/intership-RPLGDC-planpoker/Front-end---Bagas/ILLUSTRASI.png"></img>
                </div>
            </div>
            </div>
        </div>
        
        <Footer />
        </React.StrictMode>
      );
    }
  }
  
  export default Homepage;