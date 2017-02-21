<?php
/** Factory for Lessons table. */
class Lessons
{
    /**
     * Queries Lessons table in database for a single Lesson.
     * 
     * @param  Integer $id 
     * @return Lesson     
     */
    public static function find($id){
        $stmt = Query::$db->prepare('SELECT * FROM lessons WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Lesson');
        return $stmt->fetch();
    }

    /**
     * Queries Lessons table in database for all Lessons.
     * 
     * @return Array which contains Lesson objects
     */
    public static function findAll(){
        $stmt = Query::$db->prepare('
            SELECT * 
            FROM lessons
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Lesson');
        return $stmt->fetchAll();
    }

    /**
     * Queries Lessons table in database for all Lessons where $property = $value.
     * 
     * @param  String $property must be a column in the table
     * @param  Mixed $value     usually integer or string
     * @return Array            which contains Lesson objects
     */
    public static function findBy($property, $value){
        $stmt = Query::$db->prepare("
            SELECT * 
            FROM lessons 
            WHERE $property = :value
        ");
        $stmt->bindParam(':value', $value);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Lesson');
        return $stmt->fetchAll();
    }

    /**
     * Queries Lessons table in database to insert or update a given record.
     * 
     * @param  Lesson $lesson   if object contains $id then it will be updated, otherwise inserted
     * @return Boolean          was operation successful
     */
    public static function save(Lesson $lesson){
        if(isset($lesson->id) && self::find($lesson->id)){     
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

    /**
     * Queries Lessons table in database to remove a given record.
     * 
     * @param  Integer $id 
     * @return Boolean      was the operation successful?
     */
    public static function remove($id){
        $stmt = Query::$db->prepare("DELETE FROM lessons WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}

