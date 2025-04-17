import redis
import subprocess

r = redis.Redis(host='redis')

while True:
    _, job = r.brpop('ci_jobs')
    process = subprocess.run(
        job.decode(), 
        shell=True, 
        capture_output=True
    )
    r.publish('ci_logs', process.stdout)
