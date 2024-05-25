import React, { useEffect, useRef, useState } from 'react';
import "./homepage.scss";
import mount2 from '../../assets/Images/mount2.png';
import mount3 from '../../assets/Images/mount3.png';
import underline from '../../assets/Images/underline.png';
import { Link } from 'react-router-dom';
import Footer from '../../Components/Footer/Footer';

const Homepage = () => {
  const homepageRef = useRef(null);
  const titleref = useRef(null);
  const mount1ref = useRef(null);
  const mount2ref = useRef(null);
  const [scrollYPos, setScrollYPos] = useState();


  useEffect(() => {
    const handleScroll = () => {
      if (homepageRef.current) {
        let value = homepageRef.current.scrollTop;
        let navbar = document.getElementById('navbar');

        if (value > 100) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
        setScrollYPos(value);

        titleref.current.style.marginTop = value * 1.1 + "px";

        mount2ref.current.style.marginLeft = -value * 1.1 + "px";
        mount1ref.current.style.marginRight = -value * 1.1 + "px";

        // Add your logic here
      }
    };

    const homepageElement = homepageRef.current;
    if (homepageElement) {
      homepageElement.addEventListener('scroll', handleScroll);
    }

    return () => {
      if (homepageElement) {
        homepageElement.removeEventListener('scroll', handleScroll);
      }
    };
  }, []);
  return (
    <div className='homepage'>
      <div ref={homepageRef} className="homepage-wrap">
        <div className="home-header">
          <div className="homeheader-wrap">
            <img ref={mount2ref} src={mount2} className='mount2' />
            <h1 ref={titleref} className='title'>कुर्मि समाज​</h1>
            <img ref={mount1ref} src={mount3} className='mount1' />

          </div>
        </div>
        <div className="banner-section">
          <div className="bannr-wrap">
            <div className="banner-title">कुर्मि समाज (शुरुवात)</div>
            <div className="banner-data">
              <div className="row">
                <div className="cont-det">कुर्मी समाज का इतिहास भारतीय समाज के कृषि और ग्रामीण जीवन के इतिहास से गहराई से जुड़ा हुआ है। कुर्मी समाज एक प्रमुख कृषक जाति है, जो मुख्य रूप से उत्तर प्रदेश, बिहार, मध्य प्रदेश, छत्तीसगढ़, झारखंड, और महाराष्ट्र में पाई जाती है। इनका मुख्य व्यवसाय कृषि रहा है, और इन्हें कुशल कृषक और मेहनतकश समुदाय के रूप में जाना जाता है।</div>
              </div>

              <div className="row">
                <h3 className='main-title'>प्राचीन काल</h3>
                <div className="cont-det">कुर्मी समाज की उत्पत्ति का उल्लेख प्राचीन भारतीय ग्रंथों और पुराणों में मिलता है। माना जाता है कि यह समाज वैदिक काल से ही अस्तित्व में है। "कृष्ण" शब्द से "कृषि" शब्द की उत्पत्ति मानी जाती है, और कुर्मी समाज का संबंध कृषि कार्य से जोड़कर देखा जाता है। महाभारत और अन्य प्राचीन ग्रंथों में भी कृषि का वर्णन मिलता है, जिससे संकेत मिलता है कि कुर्मी समाज का अस्तित्व प्राचीन समय से ही रहा है।</div>
              </div>

              <div className="row">
                <h3 className='main-title'>मध्यकाल</h3>
                <div className="cont-det">मध्यकाल में कुर्मी समाज ने भारतीय समाज के विभिन्न क्षेत्रों में महत्वपूर्ण भूमिका निभाई। विशेष रूप से, मुगल काल और मराठा काल में इस समाज के लोगों ने कृषि उत्पादन में अपनी महत्वपूर्ण भूमिका निभाई। इस काल में कुर्मी समाज का संगठित रूप से विकास हुआ और उन्होंने अपनी कृषि पद्धतियों में सुधार किया। कुर्मी समाज ने विभिन्न राजाओं और नवाबों के अधीन कृषि क्षेत्र में उन्नति की।</div>
              </div>

              <div className="row">
                <h3 className='main-title'>ब्रिटिश काल</h3>
                <div className="cont-det">ब्रिटिश शासन के दौरान, कुर्मी समाज ने भारतीय स्वतंत्रता संग्राम में भी हिस्सा लिया। वे किसानों के अधिकारों और भूमि सुधार के लिए संघर्षरत रहे। 19वीं और 20वीं शताब्दी में, कुर्मी समाज के नेताओं ने सामाजिक और राजनीतिक क्षेत्र में सक्रिय भूमिका निभाई। स्वतंत्रता संग्राम के दौरान कुर्मी समाज ने महात्मा गांधी और अन्य स्वतंत्रता सेनानियों के आंदोलनों में भाग लिया और अपने अधिकारों के लिए लड़ाई लड़ी।</div>
              </div>

              <div className="row">
                <h3 className='main-title'>स्वतंत्रता के बाद</h3>
                <div className="cont-det">स्वतंत्रता के बाद, कुर्मी समाज ने सामाजिक और राजनीतिक क्षेत्रों में अपनी पहचान बनाई। भारत के विभिन्न राज्यों में कुर्मी समाज के संगठन और संघ बने, जिन्होंने इस समाज के सामाजिक और आर्थिक उत्थान के लिए काम किया। आधुनिक समय में, कुर्मी समाज ने शिक्षा, राजनीति, और व्यवसाय के क्षेत्र में महत्वपूर्ण प्रगति की है।</div>
              </div>

            </div>
          </div>

        </div>

        <div className="section-three">
          <div className="sec-three-wrap">
            <div className="cont-title">
              <h1>कुर्मी समाज के <span style={{color:'var(--bhagwa)'}}>उज्जवल भविष्य</span> की ओर कदम बढ़ाएं!</h1>
              <img src={underline} alt="underline" />
              <h3>सपनों को साकार करें - आज ही आवेदन करें!</h3>
            </div>
            <div className="apply-btn">
              <Link to={'/jobs'}>आवेदन करें</Link>
            </div>


          </div>
        </div>

       <Footer/>

      </div>
    </div>
  )
}

export default Homepage