import React from 'react';
import "./footer.scss";
import { Link } from 'react-router-dom';
import { FaMailBulk, FaPhone } from 'react-icons/fa';

const Footer = () => {
    const currentYear = new Date().getFullYear();
  return (
    <div className="footer">
        <div className="footer-wrap">
          <div className="col">
            <h1>कुर्मि नियोक्ता संघ</h1>
            <p>हमारा कुर्मी समाज नौकरी पोर्टल आपके उज्जवल भविष्य की ओर बढ़ने के लिए एक प्रमुख मंच है। हम कुर्मी समाज के युवाओं और पेशेवरों को रोजगार के अवसर प्रदान करने के लिए समर्पित हैं। हमारा उद्देश्य आपको विभिन्न क्षेत्रों में रोजगार के सर्वोत्तम अवसरों से जोड़ना और आपकी प्रतिभा को सही दिशा में प्रोत्साहित करना है।</p>
            <p>© {currentYear} कुर्मी समाज नौकरी पोर्टल. सर्वाधिकार सुरक्षित.</p>
          </div>

          <div className="col">
            <ul className='quicklinks'>
              <li>
                <Link to={'/home'}>होम</Link>
              </li>
              <li>
                <Link to={'/jobs'}>नौकरी</Link>
              </li>
              <li>
                <Link to={'/about'}>बारे में</Link>
              </li>

            </ul>
          </div>
          <div className="col">
            <ul className="quicklinks">
                <li><Link to={'tel:123456789'}><FaPhone/>&nbsp;123456789</Link></li>
                <li><Link to={'mailto:'}><FaMailBulk/>&nbsp;kurmisamaaj@gmail.com</Link></li>
            </ul>
          </div>
        </div>
      </div>
  )
}

export default Footer