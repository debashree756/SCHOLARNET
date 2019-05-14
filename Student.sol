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
        string memory _name, uint dob,string memory typef, uint aadhaarNo, uint SSC, uint HSC, string memory currentedu_year, uint marksheet, uint income, uint income_cert) public{

        stuCount++;
        uint i;
        students[i] = student(_name, dob,typef, aadhaarNo, SSC, HSC, currentedu_year, marksheet, income, income_cert);
        
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
    
    function getStudentData(string memory name, uint dateOfBirth, string memory typef , uint aadhaarNo, uint SSCScore, uint HSCScore,string memory currentedu_year, uint marksheet, uint annualIncome, uint income_cert) public {
        students[aadhaarNo] = student(name, dateOfBirth, typef, aadhaarNo, SSCScore, HSCScore,currentedu_year,marksheet, annualIncome, income_cert);
    }
}
