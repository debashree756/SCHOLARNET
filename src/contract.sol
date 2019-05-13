pragma solidity ^0.5.0;

contract Student{

    struct student{
        string name;
        uint dateOfBirth;
        string education;
        string type;
        uint aadhaarNo;
        uint SSCScore;
        uint HSCScore;
        string currentYear;
        uint marksheet;
        uint annualIncome;
        uint income_cert;
    }

    mapping(uint => student) public students;
    uint public stuCount;

    function _setStudentInfo(
        string memory _name, uint dob, string memory education,string type, uint aadhar, uint SSC, uint HSC, string memory curYear, uint marksheet, uint income, uint income_cert) public{

        stuCount++;
        uint i;
        students[i] = student(_name, dob, education, type, aadhar, SSC, HSC, curYear, marksheet, income, income_cert);
        
    }

    

    function getName(uint i) public view returns(string memory){
        return students[i].name;
    }

    function getSSC(uint i) public view returns(uint){
        return students[i].SSCScore;
    }

    function getHSC(uint i) public view returns(uint){
        return students[i].HSCScore;
    }

    function getAadhaar(uint i) public view returns(uint){
        return students[i].aadhaarNo;
    }

    function getDob(uint i) public view returns(uint){
        return students[i].dateOfBirth;
    }

    function getIncome(uint i) public view returns(uint){
        return students[i].annualIncome;
    }

    function getEducation(uint i) public view returns(string memory){
        return students[i].education;
    }

    function getType(uint i) public view returns(string memory){
        return students[i].type;
    }

    function getcurYear(uint i) public view returns(string memory){
        return students[i].currentYear;
    }

    function getsIncomecerti(uint i) public view returns(uint){
        return students[i].income_cert;
    }
    
    function getStudentData(uint id, string memory name, uint dateOfBirth, string memory education,string memory type, uint aadhaar, uint SSCScore, uint HSCScore, string memory currentYear, uint marksheet, uint annualIncome, uint income_cert) public {
        students[id] = student(name, dateOfBirth, education,type, aadhaar, SSCScore, HSCScore, currentYear, marksheet, annualIncome, income_cert);
    }
}



retrieving with aadhaar number

pragma solidity ^0.5.0;

contract Student{

    struct student{
        string name;
        uint dateOfBirth;
        string typef;
        uint aadhaarNo;
        uint SSCScore;
        uint HSCScore;
        string currentedu_year;
        uint marksheet;
        uint annualIncome;
        uint income_cert;
    }

    mapping(uint => student) public students;
    uint public stuCount;

    function _setStudentInfo(
        string memory _name, uint dob,string memory typef, uint aadhaar, uint SSC, uint HSC, string memory currentedu_year, uint marksheet, uint income, uint income_cert) public{

        stuCount++;
        uint i;
        students[i] = student(_name, dob,typef, aadhaar, SSC, HSC, currentedu_year, marksheet, income, income_cert);
        
    }

    

    function getName(uint i) public view returns(string memory){
        return students[i].name;
    }

    function getSSC(uint i) public view returns(uint){
        return students[i].SSCScore;
    }

    function getHSC(uint i) public view returns(uint){
        return students[i].HSCScore;
    }

    function getAadhaar(uint i) public view returns(uint){
        return students[i].aadhaarNo;
    }

    function getDob(uint i) public view returns(uint){
        return students[i].dateOfBirth;
    }

    function getIncome(uint i) public view returns(uint){
        return students[i].annualIncome;
    }

    function getEducationandYear(uint i) public view returns(string memory){
        return students[i].currentedu_year;
    }
    
    function getType(uint i) public view returns(string memory){
        return students[i].typef;
    }
   
    

    function getsIncomecerti(uint i) public view returns(uint){
        return students[i].income_cert;
    }
    
    function getStudentData(string memory name, uint dateOfBirth, string memory typef , uint aadhaar, uint SSCScore, uint HSCScore,string memory currentedu_year, uint marksheet, uint annualIncome, uint income_cert) public {
        students[aadhaar] = student(name, dateOfBirth, typef, aadhaar, SSCScore, HSCScore,currentedu_year,marksheet, annualIncome, income_cert);
    }
}
