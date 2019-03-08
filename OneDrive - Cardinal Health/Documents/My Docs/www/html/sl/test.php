<?php
# Consumer, same way as producer.
$config = { "metadata.broker.list" => "localhost:9192", "socket.timeout.ms" => 30000, ... };

# Create Kafka consumer
$consumer = new Kafka::Consumer($config);

# Topic configuration (optional)
$topic_config = { "offset.store.method" => "broker" };

# Create topic from Kafka object.
$topic1 = new Kafka::Topic($consumer, "sbjtest", $topic_config);

# Start consumer
# Offset is either a numeric offset or: beginning, end, stored
$consumer->start($partition, $offset);

# Consume messages, one at a time.
foreach ($consumer->consume() as $msginfo) {
   # Each message returned contains an error (if something went wrong), the message's offset, payload and key.
   ($err,$offset,$msg,$key) = $msginfo;

   if ($err) {
      print "ouch: $err\n";
   } else {
      print "received message at offset $offset with key $key: $msg\n";
      # Force store/commit of offset (typically not needed)
      $topic1->commit($partition, $offset);
   }
}

# Stop consumer
$consumer->stop($partition);

?>