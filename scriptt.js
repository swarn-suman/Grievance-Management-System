
  const translations = {
    en: {
    dashboard: "Dashboard",
    complaint: "Complaint",
    makecomplaint: "Make Complaint",
    completed: "Completed",
    inprogress: "In Progress",
    pending: "Pending",
    complaintHistory: "Complaint History",
    personalInfo: "Personal Info",
    editInfo: "Edit Info",
    changePassword: "Change Password",
   PendingComplaint: "Pending Complaint",
    inProgressComplaint: "inProgress Complaint",
    completedComplaint: "completed Complaint",
    makecomp: "Make a Complaint",
    cat: "category",
    subcat:"sub category",
    naturecomp:"Nature of complaint",
    comp: "complaint",
    oth: "other",
    ElecMmb: "Elected Member",
    GenPub: "General Public",
    firstName: "First Name"
    },
    hi: {
      dashboard: "डैशबोर्ड",
      complaint: "शिकायत",
      makecomplaint: "शिकायत दर्ज करें",
    completed: "पूरा हुआ",
    inprogress: "काम चल रहा है",
    pending: "बकाया",
    complaintHistory: "शिकायत इतिहास",
    personalInfo: "व्यक्तिगत जानकारी",
    editInfo: "जानकारी संपादित करें",
    changePassword: "पासवर्ड बदलें",
    PendingComplaint: "काम बकाया है",
    inProgressComplaint: "काम चल रहा है",
    completedComplaint: "काम पूरा हुआ",
    makecomp: "शिकायत दर्ज करें",
    cat: "वर्ग",
    subcat:"उपश्रेणी",
    naturecomp: "शिकायत",
    comp: "शिकायत",
    oth: "अन्य",
    ElecMmb: "निर्वाचित सदस्य",
    GenPub: "आम जनता",
    firstName: "प्रथम नाम"
    }
  };
  
  function setLanguage(lang) {
    const elements = document.querySelectorAll('[data-translate]');
    elements.forEach(element => {
      const translationKey = element.getAttribute('data-translate');
      element.textContent = translations[lang][translationKey];
    });
  }
  
  setLanguage('en');
  
