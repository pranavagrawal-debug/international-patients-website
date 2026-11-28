/* Doctor list used by the home page carousel, the doctor detail page and the price calculator.
   Facts below were taken from each doctor's page on trueartis.com (Nov 2026). Please have each doctor confirm them.
   To add or change a doctor, edit this file only.

   Fields:
   exp      years of experience, as shown on trueartis.com
   cases    number of cases, only where the clinic website states it (leave "" to hide)
   focus    short line shown on cards
   special  specialties shown as tags on cards and the doctor page
   areas    which calculator areas this doctor treats (used to show only relevant doctors):
            eyes, nose, face, breast, body, buttocks, hair, skin
   procs    procedures listed on the doctor's page
   Optional: about, languages (shown on the detail page when filled in) */
window.DOCTORS = [
  {slug:"dr-rohit-krishna", name:"Dr. Rohit Krishna", role:"Director, Plastic, Cosmetic & Reconstructive Surgery · Lajpat Nagar",
   degrees:"MBBS, MS (General Surgery), MCh (Plastic Surgery)", exp:"30+ years", cases:"13,000+",
   focus:"Facial, breast, liposuction and body contouring, hair transplant",
   special:["Body contouring","Face","Rhinoplasty","Breast","Hair transplant"],
   areas:["face","nose","breast","body","hair"],
   procs:["Liposuction and body contouring","Tummy tuck and abdominal etching","Arm contouring","Gynecomastia surgery","Facelift and facial rejuvenation","Rhinoplasty","Breast augmentation, reduction and lift","Hair transplant"],
   about:"Member of the All India Association of Plastic Surgeons and an international member of the American Society of Plastic Surgeons. He begins with each patient's concerns, anatomy and expectations, and plans for natural, proportionate results.",
   photo:"https://trueartis.com/assets/images/doctors/dr-rohit.png"},

  {slug:"dr-ashutosh-misra", name:"Dr. Ashutosh Misra", role:"Senior Consultant, Plastic & Reconstructive Surgeon",
   degrees:"MBBS, MS (General Surgery), MCh (Plastic & Reconstructive Surgery)", exp:"25+ years", cases:"12,000+",
   focus:"Body contouring, facial aesthetics, breast surgery, hair restoration",
   special:["Body contouring","Face","Rhinoplasty","Eyelids","Breast","Hair transplant"],
   areas:["eyes","nose","face","breast","body","hair"],
   procs:["Liposuction","Tummy tuck","Full body lift","Gynecomastia surgery","Breast augmentation, reduction and lift","Rhinoplasty","Eyelid surgery","Chin and cheek augmentation","Lip enhancement","Dimple creation","Hair transplantation","Reconstructive surgery"],
   about:"Also treats reconstructive cases such as oral cancer and facial trauma. Member of IAAPS, APSI, ASI, IMA and the Association of Hair Restoration Surgeons–India.",
   photo:"https://trueartis.com/assets/images/doctors/dr-ashutosh.png"},

  {slug:"dr-raman-sharma", name:"Dr. Raman Sharma", role:"Plastic, Cosmetic & Reconstructive Surgeon",
   degrees:"MBBS, MS (Surgery), MCh (Plastic Surgery)", exp:"19 years", cases:"",
   focus:"Breast surgery, body contouring, facial aesthetics, non-surgical treatments",
   special:["Breast","Body contouring","Facial aesthetics","Non-surgical","Burn & scar care"],
   areas:["face","breast","body","skin"],
   procs:["Breast surgery","Body contouring","Facial aesthetic surgery","Gynecomastia surgery","Non-surgical aesthetic treatments","Burn and scar care","Hand surgery and microsurgery"],
   about:"Reports All India Rank 1 in MCh Plastic Surgery. Advanced aesthetic training in the UK and Australia. Member of APSI, IAAPS, ASI, IMA and ISAPS.",
   photo:"https://trueartis.com/assets/images/doctors/dr-raman-sharma.png"},

  {slug:"dr-lipy-gupta", name:"Dr. Lipy Gupta", role:"Senior Consultant, Dermatology, Cosmetology & Laser Specialist",
   degrees:"MBBS, MD (Dermatology, Venereology & Leprosy)", exp:"17+ years", cases:"6,000+",
   focus:"Skin, laser and injectables, hair loss treatments (non-surgical)",
   special:["Dermatology","Laser","Botox & fillers","PRP hair therapy","Skin rejuvenation"],
   areas:["skin","hair"],
   procs:["PRP hair therapy and hair restoration","Botox, dermal fillers, thread lifts and skin boosters","Chemical peels and laser skin rejuvenation","HIFU skin tightening","Cryolipolysis (fat freezing)","Acne and acne-scar treatment","Pigmentation and melasma"],
   about:"A dermatologist rather than a plastic surgeon, so she appears for skin and non-surgical treatments. Practises evidence-based dermatology alongside current aesthetic technology.",
   photo:"https://trueartis.com/assets/images/doctors/dr-lipy-gupta.png"},

  {slug:"dr-hitesh-gupta", name:"Dr. Hitesh Gupta", role:"Senior Consultant, Plastic & Cosmetic Surgeon",
   degrees:"MBBS, MS (General Surgery), MCh (Plastic, Reconstructive & Burns Surgery, AIIMS), MRCS (England)", exp:"10+ years", cases:"6,000+",
   focus:"Liposuction, rhinoplasty, breast and facial surgery",
   special:["Liposuction","Rhinoplasty","Face","Eyelids","Breast","Hair transplant"],
   areas:["eyes","nose","face","breast","body","hair"],
   procs:["Liposuction and high-definition liposuction","Tummy tuck","Gynecomastia","Rhinoplasty","Facelift and facial rejuvenation","Eyelid surgery","Chin and facial contouring","Breast augmentation, reduction and lift","Hair transplant","Scar revision"],
   about:"Trained at UCMS and AIIMS New Delhi, with a fellowship in aesthetic surgery from IAAPS. Member of ISAPS, IAAPS, the Royal College of Surgeons (London) and the Delhi Medical Council.",
   photo:"https://trueartis.com/assets/images/doctors/dr-hitesh.png"},

  {slug:"dr-ritesh-bazaz", name:"Dr. Ritesh Bazaz", role:"Senior Consultant, Plastic & Reconstructive Surgeon",
   degrees:"MBBS, MS (General Surgery), MCh (Plastic Surgery, AIIMS New Delhi)", exp:"13+ years", cases:"7,500+",
   focus:"Rhinoplasty, facial aesthetics, body contouring, breast surgery",
   special:["Rhinoplasty","Face","Eyelids","Body contouring","Breast","Hair restoration","Injectables"],
   areas:["eyes","nose","face","breast","body","hair","skin"],
   procs:["Rhinoplasty","Gynecomastia correction","Liposuction and body contouring","Facelift and facial rejuvenation","Eyelid surgery","Breast augmentation, lift and reduction","Hair restoration","Scar revision","Non-surgical and injectable treatments"],
   about:"Member of ISAPS, IAAPS, the Delhi Medical Council and the Royal College of Surgeons (London).",
   photo:"https://trueartis.com/assets/images/doctors/dr-ritesh.png"},

  {slug:"dr-charu-sharma", name:"Dr. Charu Sharma", role:"Senior Consultant, Plastic, Cosmetic & Reconstructive Surgeon",
   degrees:"MBBS, MS (General Surgery), MCh (Plastic Surgery, gold medallist)", exp:"20+ years", cases:"15,000+",
   focus:"Face, breast, Brazilian butt lift, mommy makeover, hair transplant",
   special:["Face","Rhinoplasty","Eyelids","Breast","Mommy makeover","Brazilian butt lift","Hair transplant"],
   areas:["eyes","nose","face","breast","body","buttocks","hair"],
   procs:["Facelift","Rhinoplasty","Blepharoplasty","Chin and cheek augmentation","Facial fat grafting","Liposuction and tummy tuck","Mommy makeover","Brazilian butt lift","Arm lift and thigh lift","Breast augmentation, lift, reduction and reconstruction","Gynecomastia surgery","FUE and FUT hair transplant"],
   about:"Gold medallist in MCh Plastic Surgery. Member of ISAPS, APSI and the Delhi Medical Association.",
   photo:"https://trueartis.com/assets/images/doctors/dr-charu-sharma.png"},

  {slug:"dr-itishree-gupta", name:"Dr. Itishree Gupta", role:"Senior Consultant, Plastic & Cosmetic Surgeon",
   degrees:"MBBS, DNB (Plastic Surgery)", exp:"13+ years", cases:"7,500+",
   focus:"Rhinoplasty, mommy makeover, breast, facial and body contouring",
   special:["Rhinoplasty","Face","Eyelids","Mommy makeover","Breast","Body contouring","Non-surgical"],
   areas:["eyes","nose","face","breast","body","skin"],
   procs:["Liposuction and body contouring","Tummy tuck","Gynecomastia surgery","Mommy makeover","Rhinoplasty","Facelift and facial rejuvenation","Eyelid surgery","Facial contouring","Breast augmentation, reduction and lift","Scar revision","Non-surgical aesthetic procedures"],
   about:"Her reconstructive work includes trauma, burn, cancer-related and congenital cases.",
   photo:"https://trueartis.com/assets/images/doctors/dr-itishree.png"},

  {slug:"dr-lokesh-handa", name:"Dr. Lokesh Handa", role:"Plastic Surgeon, Hair Transplant Surgeon, Reconstruction Surgeon",
   degrees:"MBBS, MS (General Surgery), MCh (Plastic Surgery)", exp:"14+ years", cases:"8,000+",
   focus:"Hair transplant, liposuction, tummy tuck, rhinoplasty, breast surgery",
   special:["Hair transplant","Liposuction","Rhinoplasty","Face","Breast","Body contouring"],
   areas:["nose","face","breast","body","hair"],
   procs:["Liposuction and tummy tuck","Gynecomastia correction","Rhinoplasty","Facelift and facial rejuvenation","Breast augmentation and implants","Arm lift","Hair transplantation","Scar revision and reconstruction"],
   about:"Gold medallist in MCh Plastic Surgery (2010).",
   photo:"https://trueartis.com/assets/images/doctors/dr-lokesh-handa.png"},

  {slug:"dr-diksha-dixit", name:"Dr. Diksha Dixit", role:"Senior Consultant, Plastic Surgeon",
   degrees:"MBBS, MS (General Surgery), MCh (Plastic Surgery, gold medallist)", exp:"20+ years", cases:"10,000+",
   focus:"VASER liposuction, buttock augmentation, rhinoplasty, breast, hair transplant",
   special:["VASER liposuction","Buttock augmentation","Rhinoplasty","Breast","Hair transplant","Microsurgery"],
   areas:["nose","face","breast","body","buttocks","hair"],
   procs:["Liposuction, VASER liposuction and 3D body sculpting","Facial aesthetic surgery and rhinoplasty","Otoplasty","Breast augmentation and reduction","Buttock augmentation","FUE and FUT hair transplantation","Scar and keloid treatment","Microsurgery"],
   about:"Life member of the Association of Plastic Surgeons of India, the Delhi Medical Association and IAAPS.",
   photo:"https://trueartis.com/assets/images/doctors/dr-diksha.png"}
];
