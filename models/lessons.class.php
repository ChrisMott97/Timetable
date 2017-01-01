<?php

class Lessons
{
    public static function find($id){
        $stmt = Query::$db->prepare('SELECT * FROM lessons WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Lesson');
        return $stmt->fetch();
    }
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM lessons
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Lesson');
        return $stmt->fetchAll();
    }
    public static function findByYear($year){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM lessons 
            WHERE year = :year
        ');
        $stmt->bindParam(':year', $year);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Lesson');
        return $stmt->fetchAll();
    }
    public static function save(Lesson $lesson){
        if(isset($lesson->id) && Lessons::find($lesson->id)){     
            $stmt = Query::$db->prepare("
                UPDATE lessons 
                SET subject = :subject,
                    room = :room,
                    teacher = :teacher,
                    year = :year
                WHERE id = :id
            ");
            $stmt->bindParam(':subject', $lesson->subject);
            $stmt->bindParam(':room', $lesson->room);
            $stmt->bindParam(':teacher', $lesson->teacher);
            $stmt->bindParam(':year', $lesson->year);
            $stmt->bindParam(':id', $lesson->id);
            return $stmt->execute(); 
        } else{
            $stmt = Query::$db->prepare("
                INSERT INTO lessons 
                    (subject, room, teacher, year) 
                VALUES
                    (:subject, :room, :teacher, :year)
            ");
            $stmt->bindParam(':subject', $lesson->subject);
            $stmt->bindParam(':room', $lesson->room);
            $stmt->bindParam(':teacher', $lesson->teacher);
            $stmt->bindParam(':year', $lesson->year);
            return $stmt->execute();
        }
    }
    public static function remove($id){
        $stmt = Query::$db->prepare("DELETE FROM lessons WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}

