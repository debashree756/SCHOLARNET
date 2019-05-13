pragma solidity ^0.5.0;

contract Student{

    struct student{
        string name;
        uint dateOfBirth;
        string currentedu_year;
        string typef;
        uint aadhaarNo;
        uint SSCScore;
        uint HSCScore;
        uint marksheet;
        uint annualIncome;
        uint income_cert;
    }

    mapping(uint => student) public students;
    uint public stuCount;

    function _setStudentInfo(
        string memory _name, uint dob, string memory currentedu_year,string memory typef, uint aadhar, uint SSC, uint HSC, uint marksheet, uint income, uint income_cert) public{

        stuCount++;
        uint i;
        students[i] = student(_name, dob, currentedu_year,typef, aadhar, SSC, HSC, marksheet, income, income_cert);
        
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
    
    function getStudentData(uint id, string memory name, uint dateOfBirth, string memory currentedu_year,string memory typef ,uint aadhaar, uint SSCScore, uint HSCScore, uint marksheet, uint annualIncome, uint income_cert) public {
        students[id] = student(name, dateOfBirth, currentedu_year,typef, aadhaar, SSCScore, HSCScore, marksheet, annualIncome, income_cert);
    }
}
