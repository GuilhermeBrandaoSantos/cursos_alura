<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Phone;
use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = ConnectionCreator::createConnection();
    }

    public function allStudents()
    {
        $sqlQuery = 'SELECT * FROM students;';
        $stmt = $this->connection->query($sqlQuery);

        return $this->hydrateStudentList($stmt);
    }
    
    public function studentsBirthAt(\DateTimeInterface $birthDate)
    {
        $sqlQuery = 'SELECT * FROM students WHERE BIRTH_DATE = ?;';
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->bindValue(1, $birthDate->format('Y-m-d'));
        $stmt->execute();

        return $this->hydrateStudentList($stmt);
        
    }

    private function hydrateStudentList(\PDOStatement $stmt): array
    {
        $studentDataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $studentList = [];

        foreach ($studentDataList as $studentData) {
            $studentList[] = new Student(
                $studentData['ID'],
                $studentData['NAME'],
                new \DateTimeImmutable($studentData['BIRTH_DATE'])
            );            
        }

        return $studentList;
    }

    // private function fillPhoneOf(Student $student)
    // {
    //     $qrGetPhones = "SELECT ID, AREA_CODE, NUMBER FROM phones WHERE STUDENT_ID = ?";
    //     $getPhones = $this->connection->prepare($qrGetPhones);
    //     $getPhones->bindValue(1, $student->id(), PDO::PARAM_INT);
    //     $getPhones->execute();

    //     $phonesList = $getPhones->fetchAll(PDO::FETCH_ASSOC);

    //     foreach ($phonesList as $phoneData) {
    //         $phone = new Phone(
    //             $phoneData['ID'],
    //             $phoneData['AREA_CODE'],
    //             $phoneData['NUMBER']
    //         );

    //         $student->addPhone($phone);
    //     }
        
    // }

    public function save(Student $student)
    {
        if ($student->id() === null) {
            return $this->insert($student);
        }

        return $this->update($student);
    }
    
    public function insert(Student $student): bool
    {
        $insertQuery = 'INSERT INTO students (NAME, BIRTH_DATE) VALUES (:name, :birth_date);';
        $stmt = $this->connection->prepare($insertQuery);

        $success = $stmt->execute([
            ':name' => $student->name(),
            ':birth_date' => $student->birthDate()->format('Y-m-d')
        ]);

        $student->defineId($this->connection->lastInsertId());

        return $success;
    }

    public function update(Student $student): bool
    {
        $updateQuery = 'UPDATE students SET NAME = :name, BIRTH_DATE = :birth_date WHERE id = :id;';
        $stmt = $this->connection->prepare($updateQuery);
        $stmt->bindValue(':name', $student->name());
        $stmt->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
        $stmt->bindValue(':id', $student->id(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function remove(Student $student): bool
    {
        $stmt = $this->connection->prepare('DELETE FROM students WHERE id = ?;');
        $stmt->bindValue( 1, $student->id(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function studentsWithPhones(): array
    {
        $getAllStudensWithPhones = "
            SELECT 
                STD.ID,
                STD.NAME,
                STD.BIRTH_DATE,
                PHO.ID AS PHONE_ID,
                PHO.AREA_CODE,
                PHO.NUMBER
            FROM students STD
            JOIN phones PHO ON PHO.STUDENT_ID = STD.ID
        ";
        $stmt = $this->connection->query($getAllStudensWithPhones);
        $result = $stmt->fetchAll();

        $studentList = [];

        foreach ($result as $row) {
            if (!array_key_exists($row['ID'], $studentList)) {
                $studentList[$row['ID']] = new Student(
                    $row['ID'],
                    $row['NAME'],
                    new \DateTimeImmutable($row['BIRTH_DATE'])
                );
            }
            $phone = new Phone($row['PHONE_ID'], $row['AREA_CODE'], $row['NUMBER']);
            $studentList[$row['ID']]->addPhone($phone);
        }

        return $studentList;
    }
    
}